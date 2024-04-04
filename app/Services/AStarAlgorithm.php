<?php

namespace App\Services;

use App\Models\Edge;
use App\Models\Node;

class AStarAlgorithm
{
    function node_details($src_lat, $src_lng, $dest_lat, $dest_lng){
        $nodes = Node::get();
        foreach($nodes as $node){
            $lat2 = $node->latitude;
            $lng2 = $node->longitude;
            // $g = $this->duration($src_lng,$src_lat,$lng2,$lat2);
            $g = $this->distance($src_lng,$src_lat,$lng2,$lat2);
            $node['g'] = $g;
            $h = $this->heuristic($lng2,$lat2,$dest_lng,$dest_lat);
            $node['h'] = $h;
            $node['f'] = $node->g+$node->h;
        }
        return $nodes;
    }
    private function distance($lat1, $lon1, $lat2, $lon2) {
        $earth_radius = 6371; // Earth's radius in kilometers
        $delta_lat = deg2rad($lat2 - $lat1);
        $delta_lon = deg2rad($lon2 - $lon1);
        $a = sin($delta_lat / 2) * sin($delta_lat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($delta_lon / 2) * sin($delta_lon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earth_radius * $c;
        return $distance; // Distance in kilometers
    }
    function heuristic($lng1, $lat1, $lng2, $lat2) {
        // Use Haversine formula to calculate heuristic distance
        $earthRadius = 6371000; // meters
        $latFrom = deg2rad($lat1);
        $lonFrom = deg2rad($lng1);
        $latTo = deg2rad($lat2);
        $lonTo = deg2rad($lng2);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        $distance = $angle * $earthRadius;
        return $distance / 1000; // Convert meters to kilometers
    }

    function get_edge($current , $edges){
        $allEdge = [];
        foreach($edges as $edge){
            if(($current->latitude == $edge->lat1 && $current->longitude == $edge->lng1) || ($current->latitude == $edge->lat2 && $current->longitude == $edge->lng2)){
                $allEdge[] = $edge;
            }
        }
        return $allEdge;
    }
    

    function closest_nodes($src_lat, $src_lng, $dest_lat, $dest_lng) {
        $nodes = Node::get();
        $edges = Edge::get();
        $src = [
            'title' => 'Source',
            'latitude' => $src_lat,
            'longitude' => $src_lng,
            'g' => 0,
            'h' => 0,
            'f' => 0,
            'parent' =>null
        ];
        foreach($nodes as $node){
            $lat2 = $node->latitude;
            $lng2 = $node->longitude;
            // $g = $this->duration($src_lng,$src_lat,$lng2,$lat2);
            $g = $this->distance($src_lng,$src_lat,$lng2,$lat2);
            $node['g'] = $g;
            $h = $this->heuristic($lng2,$lat2,$dest_lng,$dest_lat);
            $node['h'] = $h;
            $node['f'] = $node->g+$node->h;
        }

        $open = [];
        foreach ($nodes as $node) {
            // if (($src_lat != $node->latitude || $src_lng != $node->longitude) && ($dest_lat != $node->latitude || $dest_lng != $node->longitude))
            if (($src_lat != $node->latitude || $src_lng != $node->longitude))
            {
                $open[] = $node;
            }
        }
        // dd($open);
        $path = null;
        $path = $this->path_construct_src($path, $src);
        $closed = [];
        $closed[] = [
            'title' => $path['title'],
            'lat' =>  $path['lat'],
            'lng' =>  $path['lng'],
            'g' => $path['g'],
            'h' => $path['h'],
            'f' => $path['f']
        ];
        $closestNodes = $this->find_closest_node($open,'g', $dest_lat, $dest_lng);
        $currents = $closestNodes; // Assign closest nodes to $current
        while (!empty($open)) {
            $end = $this->is_end_node($currents,$dest_lat, $dest_lng);
            if($end == true){
                // dd($this->path_construct($path, $currents));
                // return $this->path_construct($path, $currents);
                $path = $this->path_construct($path, $currents);
                $closed[] = [
                    'title' => $path['title'],
                    'lat' =>  $path['lat'],
                    'lng' =>  $path['lng'],
                    'g' => $path['g'],
                    'h' => $path['h'],
                    'f' => $path['f']
                ];
                return $closed;
            }
            $open = $this->remove_node($open, $currents);
            
            $path = $this->path_construct($path, $currents);
            $closed[] = [
                'title' => $path['title'],
                'lat' =>  $path['lat'],
                'lng' =>  $path['lng'],
                'g' => $path['g'],
                'h' => $path['h'],
                'f' => $path['f']
            ];
            foreach($currents as $current){
                $getEdge = $this->get_edge($current, $edges);
                // dd($getEdge);
            }
            // dd($edges, $getEdge);
            $fitEdge = [];
            foreach ($edges as $edge) {
                $found = false; // Flag to indicate if the edge matches any in $getEdge
                foreach($getEdge as $gEdge) {
                    if ($gEdge->id == $edge->id) {
                        $found = true;
                        break; // No need to continue checking if edge is found
                    }
                }
                if (!$found) {
                    $fitEdge[] = $edge; // Add edge to $fitEdge only if it's not found in $getEdge
                }
            }
            $edges = $fitEdge;
            // dd($edges, $fitEdge);
            // $edges = $this->remove_node($edges, $getEdge);
            // $filteredge = [];
            $filteredge = $this->filter_edge($getEdge, $path);
            $foundNodes = [];
            foreach($filteredge as $neighbour){
                $node = [
                    'lat' => $neighbour->lat2,
                    'lng' => $neighbour->lng2
                ];
                foreach ($open as $item) {
                    if ($item['latitude'] == $node['lat'] && $item['longitude'] == $node['lng']) {
                        // Found the node in $open array
                        $foundNodes[] = $item;
                        break; // Break out of the loop since we found the node
                    }
                }
            }
            // dd($foundNodes);
            $currents = $this->find_closest_node($foundNodes,'f',$dest_lat, $dest_lng);
            $open = $this->remove_node($open, $currents);
            
            if(empty($currents)){
                $currents = [
                    'title' => 'Destination',
                    'lat' =>$dest_lat,
                    'lng' =>$dest_lng,
                    'g' => 0,
                    'h' => 0,
                    'f' => 0
                ];
                // dd('ok');
                $path = $this->path_construct_end($path, $currents);
                $closed[] = [
                    'title' => $path['title'],
                    'lat' =>  $path['lat'],
                    'lng' =>  $path['lng'],
                    'g' => $path['g'],
                    'h' => $path['h'],
                    'f' => $path['f']
                ];
                return $closed;
                // return $path;
            }
            $foundNodes = null;
        }
        // dd($path, $open, $edges);
        return $closed;
        // return $path;
    }

    function filter_edge($getEdge, $path){
        $filter = [];
        foreach($getEdge as $edge){
            if(empty($path)){
                dd('ok');
            }
            if(($edge->lat1 ==$path['lat'] && $edge->lng1 == $path['lng']) ){
                $filter[] = $edge;
            }
        }
        return $filter;
    }

    function is_end_node($currents,$dest_lat, $dest_lng){
        foreach($currents as $current){
            if($current->latitude == $dest_lat && $current->longitude == $dest_lng){
                return true;
            }
        }
        return false;
    }
    function find_closest_node($allNode,$status, $dest_lat, $dest_lng){
        $closestNodes = [];
        $minF = null;
        foreach ($allNode as $node) {
            if ($minF === null || $node[$status] < $minF) {
                // dd($node->h, $dest_lat);
                if(($node->latitude == $dest_lat && $node->longitude == $dest_lng) || $node->h == 0){
                    // dd('end test');
                    $closestNodes = [$node];
                    return $closestNodes;
                }
                else{
                    $minF = $node[$status];
                    $closestNodes = [$node]; // Store the current closest node
                }
            }
            elseif ($node[$status] == $minF) {
                $closestNodes[] = $node; // If there are multiple nodes with the same 'g' value, add them to the array
                // dd($closestNodes);
                dd('test');
                // $closestNodes = array_min('');
            }
        }
        return $closestNodes;
    }

    function remove_node($open, $current){
        $open = array_diff($open, $current);
        return $open;
    }

    function path_construct_end($path, $addpath){
        $take = $path ? $path : null;
            $path = null;
            // dd($addpath);
            // foreach($addpaths as $addpath){
                $path = [
                    'title' => $addpath['title'],
                    'lat' => $addpath['lat'],
                    'lng' => $addpath['lng'],
                    'g' => $addpath['g'],
                    'h' => $addpath['h'],
                    'f' => $addpath['f'],
                    'parent' => $take
                ];
            // }
        return $path;
    }

    function path_construct($path, $addpaths){
        
        $take = $path ? $path : null;
        if(!empty($path)){
            $path = null;
            foreach($addpaths as $addpath){
                $path = [
                    'title' => $addpath['title'],
                    'lat' => $addpath['latitude'],
                    'lng' => $addpath['longitude'],
                    'g' => $addpath['g'],
                    'h' => $addpath['h'],
                    'f' => $addpath['f'],
                    'parent' => $take
                ];
            }
        }
        return $path; // Return the modified path
    }

    function path_construct_src($path, $addpaths){
        $take = $path ? $path : null;
                $path = [
                    'title' => $addpaths['title'],
                    'lat' => $addpaths['latitude'],
                    'lng' => $addpaths['longitude'],
                    'g' => $addpaths['g'],
                    'h' => $addpaths['h'],
                    'f' => $addpaths['f'],
                    'parent' => $take
                ];
        return $path; // Return the modified path
    }

}
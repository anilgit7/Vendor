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
            $g = $this->heuristic($src_lng,$src_lat,$lng2,$lat2);
            $node['g'] = $g;
            $h = $this->heuristic($lng2,$lat2,$dest_lng,$dest_lat);
            $node['h'] = $h;
            $node['f'] = $node->g+$node->h;
        }
        return $nodes;
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
    function astar($src_lat, $src_lng, $dest_lat, $dest_lng) {
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
            $g = $this->heuristic($src_lng,$src_lat,$lng2,$lat2);
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
        $path = null;
        $path = $this->path_construct_src($path, $src);
        $closed = [];
        $closed = $this->closedModule($closed,$path);
        $closestNodes = $this->find_closest_node($open,'g', $dest_lat, $dest_lng);
        // dd($closestNodes);
        $closestEndNode = $this->find_closest_node($open,'h', $dest_lat, $dest_lng);
        // dd($closestNodes, $closestEndNode);
        $currents = $closestNodes; // Assign closest nodes to $current
        while (!empty($open)) {
            $end = $this->is_end_node($currents,$dest_lat, $dest_lng);
            if($end == true){
                $path = $this->path_construct($path, $currents);
                $closed = $this->closedModule($closed,$path);
                return $closed;
            }
            $open = $this->remove_node($open, $currents);
            $endNode = $this->is_closest_end_node($currents, $closestEndNode);
            $path = $this->path_construct($path, $currents);
            $closed = $this->closedModule($closed,$path);
            if($endNode === true){
                $closed = $this->end_path_construction($path, $dest_lat, $dest_lng, $closed);
                return $closed;
            }
            foreach($currents as $current){
                $getEdge = $this->get_edge($current, $edges);
            }
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
            $currents = $this->find_closest_node($foundNodes,'f',$dest_lat, $dest_lng);
            $open = $this->remove_node($open, $currents);
            if(empty($currents)){
                $closed = $this->end_path_construction($path, $dest_lat, $dest_lng, $closed);
                return $closed;
            }
            $foundNodes = null;
        }
        dd('no path found');
        $closed = null;
        $closed[] = [
            'title' => 'Source',
            'lat' =>  $src_lat,
            'lng' =>  $src_lng,
            'g' => 0,
            'h' => 0,
            'f' => 0
        ];
        $closed[] = [
            'title' => 'Destination',
            'lat' =>  $dest_lat,
            'lng' =>  $dest_lng,
            'g' => 0,
            'h' => 0,
            'f' => 0
        ];
        return $closed;
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
    function is_closest_end_node($currents, $closestEndNode){
        foreach($currents as $current){
            foreach($closestEndNode as $close){
                if($current->latitude == $close->latitude && $current->longitude == $close->longitude){
                    return true;
                    // break;
                }
            }
        }
        return false;
    }
    function find_closest_node($allNode,$status, $dest_lat, $dest_lng){
        $closestNodes = [];
        $minStatus = null;
        foreach ($allNode as $node) {
            if ($minStatus === null || $node[$status] < $minStatus) {
                if(($node->latitude == $dest_lat && $node->longitude == $dest_lng) || $node->h == 0){
                    $closestNodes = [$node];
                    return $closestNodes;
                }
                else{
                    $minStatus = $node[$status];
                    $closestNodes = [$node];
                }
                // $minStatus = $node[$status];
                //     $closestNodes = [$node];
            }
            elseif ($node[$status] == $minStatus) {
                $closestNodes[] = $node; // If there are multiple nodes with the same 'g' value, add them to the array
            }
        }
        $minF = null;
        $closeNode = [];
        // dd($closestNodes);
        foreach($closestNodes as $closestNode){
            if($minF == null || $closestNode->f < $minF){
                $minF = $closestNode->f;
                $closeNode = [$closestNode];
            }
        }
        return $closeNode;
    }
    function remove_node($open, $current){
        $open = array_diff($open, $current);
        return $open;
    }
    function path_construct_end($path, $addpath){
        $previousPath = $path ? $path : null;
        $path = null;
        $path = $this->pathModule($previousPath, $addpath);
        return $path;
    }
    function path_construct($path, $addpaths){
        $previousPath = $path ? $path : null;
        if(!empty($path)){
            $path = null;
            foreach($addpaths as $addpath){
                $path = $this->pathModule($previousPath, $addpath);
            }
        }
        return $path; // Return the modified path
    }
    function path_construct_src($path, $addpaths){
        $previousPath = $path ? $path : null;
        $path = $this->pathModule($previousPath, $addpaths);
        return $path; // Return the modified path
    }
    function end_path_construction($path, $dest_lat, $dest_lng, $closedNodes){
        $currents = [
            'title' => 'Destination',
            'latitude' =>$dest_lat,
            'longitude' =>$dest_lng,
            'g' => 0,
            'h' => 0,
            'f' => 0
        ];
        $path = $this->path_construct_end($path, $currents);
        $closed = $this->closedModule($closedNodes,$path);
        return $closed;
    }
    function closedModule($closedNodes,$path){
        $closed = $closedNodes;
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
    function pathModule($previousPath, $createPath){
        $path = [
            'title' => $createPath['title'],
            'lat' => $createPath['latitude'],
            'lng' => $createPath['longitude'],
            'g' => $createPath['g'],
            'h' => $createPath['h'],
            'f' => $createPath['f'],
            'parent' => $previousPath
        ];
        return $path;
    }
}
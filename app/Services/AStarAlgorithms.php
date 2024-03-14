<?php

namespace App\Services;

class AStarAlgorithm
{
    public function findPath($startLat, $startLng, $endLat, $endLng, $roadNodes)
    {
        // Initialize open and closed lists
        $open = [];
        $closed = [];

        // Start node
        $startNode = [
            'lat' => $startLat,
            'lng' => $startLng,
            'g' => 0,
            'h' => $this->calculateHeuristic($startLat, $startLng, $endLat, $endLng),
            'parent' => null
        ];

        // Add start node to open list
        $open[] = $startNode;
        $closed[] = $startNode; // Add start node to closed list

        while (!empty($open)) {
            // Get the node with the lowest f value from the open list
            $current = $this->getLowestCostNode($open);

            // Move current node from open list to closed list
            $key = array_search($current, $open);
            array_splice($open, $key, 1);
            $closed[] = $current;
            
            // If reached the end node, reconstruct and return the path
            if ($this->isSameNode($current, $endLat, $endLng)) {
                return $this->reconstructPath($current);
            }

            // Expand current node's neighbors
            foreach ($this->getNeighbors($current, $roadNodes) as $neighbor) {
                // If neighbor is in the closed list, skip
                if ($this->isNodeInList($neighbor, $closed)) {
                    continue;
                }
                // Calculate tentative g value
                $tentativeG = $current['g'] + $this->calculateDistance($current['lat'], $current['lng'], $neighbor['lat'], $neighbor['lng']);
                // If neighbor is not in the open list or tentative g is lower
                if (!$this->isNodeInList($neighbor, $open) || $tentativeG < $neighbor['g']) {
                    // Set parent and g value
                    $neighbor['parent'] = $current;
                    $neighbor['g'] = $tentativeG;

                    // Calculate and set heuristic (h) value
                    $neighbor['h'] = $this->calculateHeuristic($neighbor['lat'], $neighbor['lng'], $endLat, $endLng);

                    // If neighbor is not in the open list, add it
                    if (!$this->isNodeInList($neighbor, $open)) {
                        $open[] = $neighbor;
                    }
                }
            }
        }

        // No path found
        return null;
    }

    private function calculateHeuristic($lat1, $lng1, $lat2, $lng2)
    {
        // Here you can use a heuristic like Euclidean distance or Manhattan distance
        // For simplicity, let's use Euclidean distance
        return sqrt(pow($lat2 - $lat1, 2) + pow($lng2 - $lng1, 2));
    }

    private function calculateDistance($lat1, $lng1, $lat2, $lng2)
    {
        // Here you can use the Haversine formula to calculate the actual distance
        // For simplicity, let's use Euclidean distance
        return $this->calculateHeuristic($lat1, $lng1, $lat2, $lng2);
    }

    private function getNeighbors($node, $roadNodes)
    {
        // Here you should find the neighboring nodes of the given node in the roadNodes graph
        // For simplicity, let's assume all roadNodes are neighbors

        // In this example, we simply return a copy of the roadNodes array with an additional 'g' key
        return array_map(function ($neighbor) use ($node) {
            return [
                'lat' => $neighbor['lat'],
                'lng' => $neighbor['lng'],
                'g' => $node['g'] + $this->calculateDistance($node['lat'], $node['lng'], $neighbor['lat'], $neighbor['lng']),
                'parent' => $node
            ];
        }, $roadNodes);
    }

    private function isSameNode($node, $lat, $lng)
    {
        return $node['lat'] == $lat && $node['lng'] == $lng;
    }

    private function isNodeInList($node, $list)
    {
        foreach ($list as $item) {
            if ($this->isSameNode($item, $node['lat'], $node['lng'])) {
                return true;
            }
        }
        return false;
    }

    private function getLowestCostNode($list)
    {
        $lowest = null;
        foreach ($list as $item) {
            if ($lowest === null || $item['g'] + $item['h'] < $lowest['g'] + $lowest['h']) {
                $lowest = $item;
            }
        }
        return $lowest;
    }

    private function reconstructPath($node)
    {
        $path = [];
        while ($node != null) {
            $path[] = ['lat' => $node['lat'], 'lng' => $node['lng']];
            $node = $node['parent'];
        }
        return array_reverse($path);
    }
}
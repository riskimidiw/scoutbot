<?php

class WeightedProduct {

    public function normalizeWeights($weights) {
        $sum = array_sum($weights);
        foreach($weights as $key => $value) {
            $weights[$key] = $value / $sum;
        }
        return $weights;
    }

    public function countVectorS($data, $weights, $isBenefit) {
        $scores = array();
        foreach($data as $d) {
            $score = 1;
            foreach($weights as $key => $value) {
                if($isBenefit[$key]) {
                    $score *= pow($d[$key], $value);
                }else {
                    $score *= pow($d[$key], -1 * $value);
                }
            }
            array_push($scores, $score);
        }
        return $scores;
    }

    public function countVectorV($data, $vectorS) {
        $sum = array_sum($vectorS);
        $scores = array();
        foreach($data as $key => $value) {
            $vectorS[$key] /= $sum;
            array_push($scores, array(
                'score' => $vectorS[$key],
                'data' => $value
            ));
        }
        return $scores;
    }

    public function ranking($data, $weights, $isBenefit) {
        $weights = $this->normalizeWeights($weights);
        $vectorS = $this->countVectorS($data, $weights, $isBenefit);
        $vectorV = $this->countVectorV($data, $vectorS);
        arsort($vectorV);
        $players = [];
        foreach($vectorV as $value) {
            array_push($players, $value['data']);
        }
        return $players;
    }
}

?>
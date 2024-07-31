<?php

namespace controllers\Task1;

class TaskOneController
{
    public function index()
    {
        $data = [
            ['Иванов', 'Математика', 5],
            ['Иванов', 'Математика', 4],
            ['Иванов', 'Математика', 5],
            ['Петров', 'Математика', 5],
            ['Сидоров', 'Физика', 4],
            ['Иванов', 'Физика', 4],
            ['Петров', 'ОБЖ', 4],
        ];

        $studentSubjectScore = [];
        $subjects = [];

        foreach ($data as $item) {
            list($name, $subject, $score) = $item;
            if (!isset($studentSubjectScore[$name][$subject])) {
                $studentSubjectScore[$name][$subject] = $score;
            } else {
                $studentSubjectScore[$name][$subject] += $score;
            }
        }
        
        foreach($studentSubjectScore as $subjectScore){
            $subjectScoreKeys = (array_keys($subjectScore));
            foreach($subjectScoreKeys as $subject){
                $subjects[] = $subject;
            }
        }
        
        $subjects = array_unique($subjects);
        sort($subjects);
        ksort($studentSubjectScore);
        
        include('app/views/task1/index.php');
    }
}

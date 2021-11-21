<?php

return [
    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'degree_structure' => [
        'College_of_Accountancy_and_Finance' => [
            'Bachelor of Science in' => 'A,MA',
            'Bachelor of Science in Business Administration Major in' => 'FM',
        ],
        'College_of_Architecture_Design_and_the_Built_Environment' => [
            'Bachelor of Science in' => 'ARCHI,ID',
        ],
        'College_of_Arts_and_Letters' => [
            'Bachelor of Arts in' => 'ELS,F,LCS,PHILO',
            'Bachelor of Performing Arts major in' => 'TA',
        ],
        'College_of_Business_Administration' => [
            'Bachelor of Science in Business Administration Major in' => 'HRM,MM',
            'Bachelor of Science in' => 'ENTREP,OA',
        ],
        'College_of_Communication' => [
            'Bachelor in' => 'ADPR',
            'Bachelor of Arts in' => 'BR,CR,J',
        ],
        'College_of_Computer_and_Information_Sciences' => [
            'Bachelor of Science in' => 'CS,IT',
        ],  
        'College_of_Education' => [
            'Bachelor in' => 'EED,LIS',
            'Bachelor of Business Technology and Livelihood Education major in' => 'HE,IA,IACT',
            'Bachelor of' => 'ECED',
            'Bachelor of Secondary Education major in' => 'EN,FL,MT,SC,SS',
            'Bachelor of Technical Vocational Education major in' => 'FSM',
        ],
        'College_of_Engineering' => [
            'Bachelor of Science in' => 'CE,COE,EE,ECE,IE,ME,RE',
        ],
        'College_of_Human_Kinetics' => [
            'Bachelor of' => 'PE',
            'Bachelor of Science in' => 'ES',
        ],
        'College_of_Political_Science_and_Public_Administration' => [
            'Bachelor of' => 'PA',
            'Bachelor of Arts in' => 'IS,PE,PS',
        ],
        'College_of_Social_Sciences_and_Development' => [
            'Bachelor of Arts in' => 'H,S',
            'Bachelor of Science in' => 'C,E,PSY',
        ],
        'College_of_Science' => [
            'Bachelor of Science' => 'FT',
            'Bachelor of Science in' => 'APMATH,BIO,CHEM,MATH,ND,PHY,STAT',
        ],
        'College_of_Tourism_Hospitality_and_Transportation_Management' => [
            'Bachelor of Science in' => 'HM,TM,TRM',
        ],
        'Institute_of_Technology' => [
            'Diploma in' => 'CET,EET,ECET,ICT,MET,OMT',
        ],
    ],
    
    'course_map' => [
        'A' => 'Accountancy',
        'MA' => 'Management Accounting',
        'FM' => 'Financial Management', 
        'ARCHI' => 'Architecture',
        'ID'=> 'Interior Design',
        'ELS' => 'English Language Studies',
        'F' => 'Filipinology',
        'LCS' => 'Literary and Cultural Studies',
        'PHILO' => 'Philosophy',
        'TA' => 'Theater Arts',
        'BA' => 'Business Administration',
        'HRM' => 'Human Resource Management',
        'MM' => 'Marketing Management',
        'ENTREP' => 'Entrepreneurship',
        'OA' => 'Office Administration',
        'ADPR' => 'Advertising and Public Relations',
        'BR' => 'Broadcasting',
        'CR' => 'Communication Research',
        'J' => 'Journalism',
        'CS' => 'Computer Science',
        'IT' => 'Information Technology',
        'EED' => 'Elementary Education',
        'LIS' => 'Library and Information Science',
        'HE' => 'Home Economics',
        'IA' => 'Industrial Arts',
        'IACT' => 'Information and Communication Technology',
        'ECED' =>'Early Childhood Education',
        'EN' => 'English',
        'FL' => 'Filipino',
        'MT' => 'Mathematics',
        'SC' => 'Science',
        'SS' => 'Social Studies',
        'FSM' => 'Food Service Management',
        'CE' => 'Civil Engineering',
        'COE' => 'Computer Engineering',
        'EE' => 'Electrical Engineering',
        'ECE' => 'Electronics Engineering',
        'IE' => 'Industrial Engineering',
        'ME' => 'Mechanical Engineering',
        'RE' => 'Railway Engineering',
        'PE' => 'Physical Education',
        'ES' => 'Exercises and Sports',
        'PA' => 'Public Administration',
        'IS' => 'International Studies',
        'PE' => 'Political Economy',
        'PS' => 'Political Science',
        'H' => 'History',
        'S' => 'Sociology',
        'C' => 'Cooperatives',
        'E' => 'Economics',
        'PSY' => 'Psychology',
        'FT' => 'Food Technology',
        'APMATH' => 'Applied Mathematics',
        'BIO' => 'Biology',
        'CHEM' => 'Chemistry',
        'MATH' => 'Mathematics',
        'ND' => 'Nutrition and Dietetics',
        'PHY' => 'Physics',
        'STAT' => 'Statistics',
        'HM' => 'Hospitality Management',
        'TM' => 'Tourism Management',
        'TRM' => 'Transportation Management',
        'CET' => 'Computer Engineering Technology',
        'EET' => 'Electrical Engineering Technology',
        'ECET' => 'Electronics Communications Engineering Technology',
        'ICT' => 'Information Communication Technology',
        'MET' => 'Mechanical Engineering Technology',
        'OMT' => 'Office Management Technology',
    ]
];

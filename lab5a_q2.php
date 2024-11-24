<?php

$student = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Program</th><th>Age</th></tr>";
foreach ($student as $s) {
    echo "<tr>";
    echo "<td>{$s['name']}</td>";
    echo "<td>{$s['program']}</td>";
    echo "<td>{$s['age']}</td>";
    echo "</tr>";
}
echo "</table>";

?>

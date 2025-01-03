<?php
function hashLastColumnInCSV($inputFile, $outputFile) {
    // Open the input and output files
    $inputHandle = fopen($inputFile, 'r');
    $outputHandle = fopen($outputFile, 'w');

    if ($inputHandle && $outputHandle) {
        while (($row = fgetcsv($inputHandle)) !== false) {
            // Get the last column index
            $lastColumnIndex = count($row) - 1;

            // Hash the value in the last column if it's not empty
            if (!empty($row[$lastColumnIndex])) {
                $row[$lastColumnIndex] = password_hash($row[$lastColumnIndex], PASSWORD_DEFAULT);
            }

            // Write the updated row to the output file
            fputcsv($outputHandle, $row);
        }

        // Close the file handles
        fclose($inputHandle);
        fclose($outputHandle);
        echo "Hashed data saved to $outputFile";
    } else {
        echo "Failed to open input or output file.";
    }
}

// Usage example
$inputFile = 'input.csv'; // Path to your input CSV file
$outputFile = 'output.csv'; // Path to save the hashed output file
hashLastColumnInCSV($inputFile, $outputFile);
?>

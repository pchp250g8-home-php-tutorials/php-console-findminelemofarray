<?php
    system("cls");
    print("Input a count of elements in array:\r\n");
    $nElems = intval(chop(fgets(STDIN)));
    if ($nElems == 0) 
    {
        echo "Empty arrays not allowed\r\n";
        fgetc(STDIN);
        exit(1);
    }
    $iNumbers = array();
    srand();
    echo("Generating array by filling " . $nElems . " elements\r\n");
    for ($i = 0; $i < $nElems; $i++)
    {
        $nItem = rand(1, 100);
        $iNumbers[] = $nItem;
        printf("%d ", $iNumbers[$i]);
    }
    $iMin = $iNumbers[0];
    $nIndex = 0;
    for ($i = 1; $i < $nElems; $i++)
    {
        if($iNumbers[$i] < $iMin)
        {
            $iMin = $iNumbers[$i];
            $nIndex = $i;
        }
    }
    printf("\r\nFound minimum element:%d with index %d\r\n", $iMin, $nIndex);
    fgetc(STDIN);
?>
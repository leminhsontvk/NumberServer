<?php
#Main Loop
function custom_shuffle($Array = array())
{
    $Copy = array();
    while (count($Array))
    {

        $Element = array_rand($Array);
        $Copy[$Element] = $Array[$Element];
        unset($Array[$Element]);
    }
    return $Copy;
}
#Main Variable
{
    $APIKey = '';
}
#Check API Key
{
    if (strcasecmp($APIKey, $_REQUEST['APIKey']) == 0)
    {
        $Data = array('1','2','3','4');
        $GoFirstData = custom_shuffle($Data);
        $ID = 0;
        $GoFirst = array();
        foreach($GoFirstData as $Key => $Value)
        {
            $GoFirst[] = $Value;
        }
        echo "<h3> Tổ ".$GoFirst['0']." - Tổ ".$GoFirst['1']." - Tổ ".$GoFirst['2']." - Tổ ".$GoFirst['3'];
    }
    else
    {
        exit;
    }
}
<?php
#Main Variable
{
    function LMSRand($Array = array())
    {
        $Copy = array();
        $Element = array_rand($Array);
        $Copy['0'] = $Array[$Element];
        unset($Array[$Element]);
        return $Copy;
    }
    $APIKey = '';
    $Team = $_REQUEST['WhatTeam'];
}
#Main Info
{
    include 'NameList.php';
}
#Check API Key
{
    if (strcasecmp($APIKey, $_REQUEST['APIKey']) == 0)
    {
        if ($Team == 1)
        {
            $Max = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
            goto TeamA;
        }
        if ($Team == 2)
        {
            $Max = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
            goto TeamB;
        }
        if ($Team == 3)
        {
            $Max = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
            goto TeamC;
        }
        if ($Team == 4)
        {
            $Max = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
            goto TeamD;
        }
    }
    else
    {
        exit;
    }
}
#Team Match
{
    TeamA:
    {
        RedoA:
        $PartnerA = (int)LMSRand($Max)['0'];
        $PartnerB = (int)LMSRand($Max)['0'];
        if ($PartnerA == $PartnerB)
        {
            goto RedoA;
        }
        goto Result;
    }
    TeamB:
    {
        RedoB:
        $PartnerA = (int)LMSRand($Max)['0'];
        $PartnerB = (int)LMSRand($Max)['0'];
        if ($PartnerA == $PartnerB)
        {
            goto RedoB;
        }
    }
    TeamC:
    {
        RedoC:
        $PartnerA = (int)LMSRand($Max)['0'];
        $PartnerB = (int)LMSRand($Max)['0'];
        if ($PartnerA == $PartnerB)
        {
            goto RedoC;
        }
    }
    TeamD:
    {
        RedoD:
        $PartnerA = (int)LMSRand($Max)['0'];
        $PartnerB = (int)LMSRand($Max)['0'];
        if ($PartnerA == $PartnerB)
        {
            goto RedoD;
        }
    }
    Result:
    $TeamMatch = array
    (
        'Partner A' => array
        (
            'ID' => $PartnerA,
            'Name' => $Name[$PartnerA]['name']
        ),
        'Partner B' => array
        (
            'ID' => $PartnerB,
            'Name' => $Name[$PartnerB]['name']
        )
    );
}
print_r
(
    "<h3>Người chơi thứ nhất:<br><h4>Số thứ tự: ".$TeamMatch['Partner A']['ID']."<br> Tên: ".$TeamMatch['Partner A']['Name']."<br><h3>Người chơi thứ hai:<br><h4>Số thứ tự: ".$TeamMatch['Partner B']['ID']."<br> Tên: ".$TeamMatch['Partner B']['Name']

);
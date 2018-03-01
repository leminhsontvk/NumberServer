<?php
#Main Variable
{
    $APIKey = 'LMSAPIKey';
    $Max = $_REQUEST['Max'];
    $Team = $_REQUEST['Team'];
}
#Check Max
{
    if ($Max <=1)
    {
        exit;
    }
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
            goto TeamA;
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
        $PartnerA = mt_rand(1, $Max);
        $PartnerB = mt_rand(1, $Max);
        #Sơn A
        {
            if ($PartnerA == 5)
            {
                while ($PartnerA == 5)
                {
                    $PartnerA = mt_rand(1, $Max);
                }
            }
        }
        #Sơn B
        {
            if ($PartnerB == 5)
            {
                while ($PartnerB == 5)
                {
                    $PartnerB = mt_rand(1, $Max);
                }
            }
        }
        #Crazzy Girl A
        {
            if ($PartnerA == 10)
            {
                while ($PartnerA == 10)
                {
                    $PartnerA = mt_rand(1, $Max);
                }
            }
        }
        #Crazzy Girl B
        {
            if ($PartnerB == 10)
            {
                while ($PartnerB == 10)
                {
                    $PartnerB = mt_rand(1, $Max);
                }
            }
        }
        #Son A
        {
            if ($PartnerA == 3)
            {
                while ($PartnerB == 8 or $PartnerB == 10 or $PartnerB == 9)
                {
                    $PartnerB = mt_rand(1, $Max);
                }
            }
            print_r($PartnerB);
        }
        #Son B
        {
            if ($PartnerB == 3)
            {
                while ($PartnerA == 8 or $PartnerA == 10 or $PartnerA == 9)
                {
                    $PartnerA = mt_rand(1, $Max);
                }
            }
            print_r($PartnerA);
        }
        #Quỳnh A
        {
            if ($PartnerA == 4)
            {
                while ($PartnerB == 8 or $PartnerB == 10 or $PartnerB == 9)
                {
                    $PartnerB = mt_rand(1, $Max);
                }
            }
            print_r($PartnerB);
        }
        #Quỳnh B
        {
            if ($PartnerB == 4)
            {
                while ($PartnerA == 8 or $PartnerA == 10 or $PartnerA == 9)
                {
                    $PartnerA = mt_rand(1, $Max);
                }
            }
            print_r($PartnerA);
        }
        #Oanh A
        {
            if ($PartnerA == 6)
            {
                while ($PartnerB == 8 or $PartnerB == 10 or $PartnerB == 9)
                {
                    $PartnerB = mt_rand(1, $Max);
                }
            }
            print_r($PartnerB);
        }
        #Oanh B
        {
            if ($PartnerB == 6)
            {
                while ($PartnerA == 8 or $PartnerA == 10 or $PartnerA == 9)
                {
                    $PartnerA = mt_rand(1, $Max);
                }
            }
            print_r($PartnerA);
        }
    }
}
<?php
if ($Team == 1)
{
    goto TeamA;
}
if ($Team == 2)
{
    goto TeamB;
}
if ($Team == 3)
{
    goto TeamC;
}
if ($Team == 4)
{
    goto TeamD;
}
#Team A
TeamA:
{
    $Name = array
    (
        '1' => array
        (
            'name' => 'T. An'
        ),
        '2' => array
        (
            'name' => 'H. Duy'
        ),
        '3' => array
        (
            'name' => 'H. Son'
        ),
        '4' => array
        (
            'name' => 'T. Quỳnh'
        ),
        '5' => array
        (
            'name' => 'Sơn'
        ),
        '6' => array
        (
            'name' => 'H. Oanh'
        )
    ,
        '7' => array
        (
            'name' => 'Võ Phát'
        ),
        '8' => array
        (
            'name' => 'Phương'
        )
    ,
        '9' => array
        (
            'name' => 'Giáp Vy'
        ),
        '10' => array
        (
            'name' => 'Thùy'
        )
    );
    goto End;
}
#Team B
TeamB:
{
    $Name = array
    (
        '1' => array
        (
            'name' => 'Thanh'
        ),
        '2' => array
        (
            'name' => 'Quyên'
        ),
        '3' => array
        (
            'name' => 'Tân'
        ),
        '4' => array
        (
            'name' => 'Trần Phát'
        ),
        '5' => array
        (
            'name' => 'Y. Nhung'
        ),
        '6' => array
        (
            'name' => 'K. Như'
        )
    ,
        '7' => array
        (
            'name' => 'Trần Vy'
        ),
        '8' => array
        (
            'name' => 'Thơ'
        )
    ,
        '9' => array
        (
            'name' => 'Phụng'
        ),
        '10' => array
        (
            'name' => 'T. Phú'
        ),
        '11' => array
        (
            'name' => 'P. Nhựt'
        ),
        '12' => array
        (
            'name' => 'N. Nhựt'
        )
    );
    goto End;
}
#Team C
TeamC:
{
    $Name = array
    (
        '1' => array
        (
            'name' => 'T. Duy'
        ),
        '2' => array
        (
            'name' => 'Chiến'
        ),
        '3' => array
        (
            'name' => 'Tố Như'
        ),
        '4' => array
        (
            'name' => 'Như Quỳnh'
        ),
        '5' => array
        (
            'name' => 'Trần Sang'
        ),
        '6' => array
        (
            'name' => 'Châu Tâm'
        )
    ,
        '7' => array
        (
            'name' => 'Thành Việt'
        ),
        '8' => array
        (
            'name' => 'Nguyễn Phát'
        )
    ,
        '9' => array
        (
            'name' => 'Như C'
        ),
        '10' => array
        (
            'name' => 'Như A'
        ),
        '11' => array
        (
            'name' => 'T. Nhựt'
        ),
        '12' => array
        (
            'name' => 'T. Quang'
        )
    );
    goto End;
}
#Team D
TeamD:
{
    $Name = array
    (
        '1' => array
        (
            'name' => 'Vĩnh Phú'
        ),
        '2' => array
        (
            'name' => 'Lê Sang'
        ),
        '3' => array
        (
            'name' => 'Tú Sương'
        ),
        '4' => array
        (
            'name' => 'Như Quyên'
        ),
        '5' => array
        (
            'name' => 'Trương Diễm'
        ),
        '6' => array
        (
            'name' => 'Ngô Diễm'
        )
    ,
        '7' => array
        (
            'name' => 'Hoàng Phi'
        ),
        '8' => array
        (
            'name' => 'Phong'
        )
    ,
        '9' => array
        (
            'name' => 'Thị Như'
        ),
        '10' => array
        (
            'name' => 'Như B'
        )
    );
    goto End;
}
End:
<?php
function checkHoroscope($month, $day){
    //SM=StartMonth. EM=EndMonth, SD=StartDay, ED=EndDay
        $horoscopes = array(
            "vädurenSM"     => 3,       "vädurenEM"     => 4,       "vädurenSD"     => 21,      "vädurenED"     => 20,
            "oxenSM"        => 4,       "oxenEM"        => 5,       "oxenSD"        => 21,      "oxenED"        => 21,
            "tvillingenSM"  => 5,       "tvillingenEM"  => 6,       "tvillingenSD"  => 22,      "tvillingenED"  => 21,
            "kräftanSM"     => 6,       "kräftanEM"     => 7,       "kräftanSD"     => 22,      "kräftanED"     => 22,
            "lejonetSM"     => 7,       "lejonetEM"     => 8,       "lejonetSD"     => 23,      "lejonetED"     => 23,
            "jungfrunSM"    => 8,       "jungfrunEM"    => 9,       "jungfrunSD"    => 24,      "jungfrunED"    => 22,
            "vågenSM"       => 9,       "vågenEM"       => 10,      "vågenSD"       => 23,      "vågenED"       => 23,
            "skorionenSM"   => 10,      "skorionenEM"   => 11,      "skorionenSD"   => 24,      "skorionenED"   => 22,
            "skyttenSM"     => 11,      "skyttenEM"     => 12,      "skyttenSD"     => 23,      "skyttenED"     => 21,
            "stenbockenSM"  => 12,      "stenbockenEM"  => 1,       "stenbockenSD"  => 22,      "stenbockenED"  => 20,
            "vattumannenSM" => 1,       "vattumannenEM" => 2,       "vattumannenSD" => 21,      "vattumannenED" => 18,
            "fiskarnaSM"    => 2,       "fiskarnaEM"    => 3,       "fiskarnaSD"    => 19,      "fiskarnaED"    => 20,
        );
        if($month == $horoscopes["vädurenSM"] && $day >= $horoscopes["vädurenSD"] || $month == $horoscopes["vädurenEM"] && $day <= $horoscopes["vädurenED"]){          
            $myHoroscope = "<h3>Vädur</h3>";
            
        }
        if($month == $horoscopes["oxenSM"] && $day >= $horoscopes["oxenSD"] || $month == $horoscopes["oxenEM"] && $day <= $horoscopes["oxenED"]){          
            $myHoroscope = "<h3>Oxe</h3>";
        }
        if($month == $horoscopes["tvillingenSM"] && $day >= $horoscopes["tvillingenSD"] || $month == $horoscopes["tvillingenEM"] && $day <= $horoscopes["tvillingenED"]){          
            $myHoroscope = "<h3>Tvilling</h3>";
        }
        if($month == $horoscopes["kräftanSM"] && $day >= $horoscopes["kräftanSD"] || $month == $horoscopes["kräftanEM"] && $day <= $horoscopes["kräftanED"]){          
            $myHoroscope = "<h3>Kräfta</h3>";
        }
        if($month == $horoscopes["lejonetSM"] && $day >= $horoscopes["lejonetSD"] || $month == $horoscopes["lejonetEM"] && $day <= $horoscopes["lejonetED"]){          
            $myHoroscope = "<h3>Lejon</h3>";
        }
        if($month == $horoscopes["jungfrunSM"] && $day >= $horoscopes["jungfrunSD"] || $month == $horoscopes["jungfrunEM"] && $day <= $horoscopes["jungfrunED"]){          
            $myHoroscope = "<h3>Jungfru</h3>";
        }
        if($month == $horoscopes["vågenSM"] && $day >= $horoscopes["vågenSD"] || $month == $horoscopes["vågenEM"] && $day <= $horoscopes["vågenED"]){          
            $myHoroscope = "<h3>Våg</h3>";
        }
        if($month == $horoscopes["skorionenSM"] && $day >= $horoscopes["skorionenSD"] || $month == $horoscopes["skorionenEM"] && $day <= $horoscopes["skorionenED"]){          
            $myHoroscope = "<h3>Skorpion</h3>";
        }
        if($month == $horoscopes["skyttenSM"] && $day >= $horoscopes["skyttenSD"] || $month == $horoscopes["skyttenEM"] && $day <= $horoscopes["skyttenED"]){          
            $myHoroscope = "<h3>Skytt</h3>";
        }
        if($month == $horoscopes["stenbockenSM"] && $day >= $horoscopes["stenbockenSD"] || $month == $horoscopes["stenbockenEM"] && $day <= $horoscopes["stenbockenED"]){          
            $myHoroscope = "<h3>Stenbock</h3>";
        }
        if($month == $horoscopes["vattumannenSM"] && $day >= $horoscopes["vattumannenSD"] || $month == $horoscopes["vattumannenEM"] && $day <= $horoscopes["vattumannenED"]){          
            $myHoroscope = "<h3>Vattuman</h3>";
        }
        if($month == $horoscopes["fiskarnaSM"] && $day >= $horoscopes["fiskarnaSD"] || $month == $horoscopes["fiskarnaEM"] && $day <= $horoscopes["fiskarnaED"]){          
            $myHoroscope = "<h3>Fisk</h3>";
        }
        
        return $myHoroscope;
}
?>
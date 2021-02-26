<?php
	$pokemon=$_POST['pokemon'];
	$n=$_POST['n'];
	$k=$_POST['k'];

	function comb($k,$n){
    $n = intval($n);
    $k = intval($k);
    if ($k > $n){
        return 0;
    } elseif ($k ==0) {
        return 1;
    } else {
        if ($k >= $n - $k){
            $l = $k+1;
            for ($i = $l+1 ; $i <= $n ; $i++)
                $l *= $i;
            $m = 1;
            for ($i = 2 ; $i <= $n-$k ; $i++)
                $m *= $i;
        } else {
            $l = ($n-$k) + 1;
            for ($i = $l+1 ; $i <= $n ; $i++)
                $l *= $i;
            $m = 1;
            for ($i = 2 ; $i <= $k ; $i++)
                $m *= $i;            
        }
    }
    return $l/$m;
} 
	function binomial($n, $k, $p){
		$prob=comb($k, $n)*($p**$k)*((1-$p)**($n-$k));
	return round($prob, 4);
	}

	switch($pokemon){
        case 0: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/19)*100 ."%";
			break;
        case -1: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/25)*100 ."%";
			break;
		case 1:
			echo "Hay una probabilidad del ".binomial($n, $k, 1/510)*100 ."%";
			break;
		case 4: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/526)*100 ."%";
			break;
		case 7: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/555)*100 ."%";
			break;
        case 10: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/432)*100 ."%";
			break;
		case 13: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/495)*100 ."%";
			break; 
		case 15: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/68)*100 ."%";
			break; 
		case 16: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/313)*100 ."%";
			break;
        case 19: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break; 
        case 21: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/352)*100 ."%";
			break;
        case 23: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break;
		case 25: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/610)*100 ."%";
			break;
        case 26: 
			echo "Hay una probabilidad del ".binomial($n, $k, 32/1567)*100 ."%";
			break;
		case 27: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break; 
        case 29: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/375)*100 ."%";
			break;
        case 32: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/442)*100 ."%";
			break;
		case 35: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/454)*100 ."%";
			break; 
		case 37: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/71)*100 ."%";
			break; 
		case 39: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/560)*100 ."%";
			break; 
        case 41: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break;
        case 43: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break;
        case 46: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/400)*100 ."%";
			break;
        case 48: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/632)*100 ."%";
			break;
        case 50: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/954)*100 ."%";
			break;
        case 52: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break;
        case 54: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/466)*100 ."%";
			break;
        case 56: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break;
		case 58: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/362)*100 ."%";
			break; 
		case 60: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/364)*100 ."%";
			break; 
        case 63: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/402)*100 ."%";
			break;
		case 66: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/486)*100 ."%";
			break; 
        case 69: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/486)*100 ."%";
			break;
		case 72: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/453)*100 ."%";
			break; 
		case 74: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/417)*100 ."%";
			break; 
        case 77: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/428)*100 ."%";
			break; 
        case 79: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/863)*100 ."%";
			break;
        case 81: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/877)*100 ."%";
			break;
		case 83: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/277)*100 ."%";
			break; 
        case 84: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/530)*100 ."%";
			break;
		case 86: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/330)*100 ."%";
			break; 
		case 88: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/483)*100 ."%";
			break; 
		case 90: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/525)*100 ."%";
			break; 
        case 92: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/465)*100 ."%";
			break; 
        case 95: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/67)*100 ."%";
			break;
        case 96: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/539)*100 ."%";
			break;
		case 98: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/456)*100 ."%";
			break;
        case 100: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/531)*100 ."%";
			break;
        case 102: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/593)*100 ."%";
			break;
        case 104: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/456)*100 ."%";
			break;
        case 106: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/547)*100 ."%";
			break;
        case 107: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/863)*100 ."%";
			break;
        case 108: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/61)*100 ."%";
			break;
		case 109: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/810)*100 ."%";
			break;
        case 111: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/446)*100 ."%";
			break;
        case 113: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/82)*100 ."%";
			break;
        case 114: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/356)*100 ."%";
			break;
		case 115: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/377)*100 ."%";
			break;
        case 116: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/484)*100 ."%";
			break;
		case 118: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/455)*100 ."%";
			break;
        case 120: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/757)*100 ."%";
			break;
        case 122: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/455)*100 ."%";
			break;
        case 123: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/455)*100 ."%";
			break;
        case 124: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/455)*100 ."%";
			break;
        case 125: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/455)*100 ."%";
			break;
		case 126: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/450)*100 ."%";
			break;
        case 127: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/70)*100 ."%";
			break;
		case 128: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/530)*100 ."%";
			break;
		case 129: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/481)*100 ."%";
			break;
		case 131: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/72)*100 ."%";
			break;
		case 133: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/486)*100 ."%";
			break;
        case 137: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/455)*100 ."%";
			break;
        case 138: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/699)*100 ."%";
			break;
        case 140: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
        case 142: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/46)*100 ."%";
			break;
        case 143: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/200)*100 ."%";
			break;
        case 147: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/552)*100 ."%";
			break;
        case 152: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
        case 155: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
        case 158: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
		case 161: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/405)*100 ."%";
			break;
        case 165: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/405)*100 ."%";
			break;
		case 170: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/655)*100 ."%";
			break;
        case 177: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/655)*100 ."%";
			break;
		case 179: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/472)*100 ."%";
			break;
        case 183: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/472)*100 ."%";
			break;
        case 185: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/600)*100 ."%";
			break;
        case 190: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/600)*100 ."%";
			break;
        case 191: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/450)*100 ."%";
			break;
        case 193: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/450)*100 ."%";
			break;
		case 194: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/384)*100 ."%";
			break;
        case 198: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/650)*100 ."%";
			break;
		case 200: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/541)*100 ."%";
			break;
        case 202: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/450)*100 ."%";
			break;
        case 204: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/60)*100 ."%";
			break;
        case 206: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/550)*100 ."%";
			break;
        case 207: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
        case 209: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/650)*100 ."%";
			break;
        case 211: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/650)*100 ."%";
			break;
		case 213: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/573)*100 ."%";
			break;
        case 215: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/60)*100 ."%";
			break;
		case 216: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/567)*100 ."%";
			break;
		case 220: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/479)*100 ."%";
			break;
		case 227: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/56)*100 ."%";
			break;
        case 228: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/650)*100 ."%";
			break;
		case 234: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/859)*100 ."%";
			break;
		case 241: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/540)*100 ."%";
			break;
        case 241: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/650)*100 ."%";
			break;
		case 252: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/453)*100 ."%";
			break;
		case 255: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/578)*100 ."%";
			break;
		case 258: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/691)*100 ."%";
			break;
		case 261: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/563)*100 ."%";
			break;
        case 263: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/563)*100 ."%";
			break;
        case 265: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/563)*100 ."%";
			break;
        case 270: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/563)*100 ."%";
			break;
        case 273: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/563)*100 ."%";
			break;
        case 276: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/563)*100 ."%";
			break;
		case 278: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/403)*100 ."%";
			break;
		case 280: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/348)*100 ."%";
			break;
		case 287: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/564)*100 ."%";
			break;
		case 296: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/562)*100 ."%";
			break;
        case 300: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/562)*100 ."%";
			break;
        case 302: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/600)*100 ."%";
			break;
        case 303: 
			echo "Hay una probabilidad del ".binomial($n, $k, 12/635)*100 ."%";
			break;
		case 304: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/566)*100 ."%";
			break;
		case 307: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/134)*100 ."%";
			break; 
		case 309: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/418)*100 ."%";
			break; 
		case 313: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/494)*100 ."%";
			break; 
		case 314: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/457)*100 ."%";
			break; 
        case 315: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
        case 318: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/600)*100 ."%";
			break;
        case 320: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/700)*100 ."%";
			break;
        case 325: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/700)*100 ."%";
			break;
        case 327: 
			echo "Hay una probabilidad del ".binomial($n, $k, 26/1303)*100 ."%";
			break;
        case 328: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break;
        case 333: 
			echo "Hay una probabilidad del ".binomial($n, $k, 15/5790)*100 ."%";
			break;
		case 335: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/431)*100 ."%";
			break; 
		case 336: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/587)*100 ."%";
			break; 
		case 338: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/677)*100 ."%";
			break; 
        case 339: 
			echo "Hay una probabilidad del ".binomial($n, $k, 9/4403)*100 ."%";
			break;
		case 343: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/1004)*100 ."%";
			break; 
        case 345: 
			echo "Hay una probabilidad del ".binomial($n, $k, 4/1833)*100 ."%";
			break;
        case 347: 
			echo "Hay una probabilidad del ".binomial($n, $k, 6/1855)*100 ."%";
			break;
        case 349: 
			echo "Hay una probabilidad del ".binomial($n, $k, 68/4404)*100 ."%";
			break;
		case 351: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/910)*100 ."%";
			break; 
        case 353: 
			echo "Hay una probabilidad del ".binomial($n, $k, 17/9019)*100 ."%";
			break;
        case 355: 
			echo "Hay una probabilidad del ".binomial($n, $k, 10/7971)*100 ."%";
			break;
        case 359: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/130)*100 ."%";
			break;
		case 361: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/378)*100 ."%";
			break; 
        case 366: 
			echo "Hay una probabilidad del ".binomial($n, $k, 7/337)*100 ."%";
			break;
        case 370: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/403)*100 ."%";
			break;
		case 371: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/1276)*100 ."%";
			break; 
        case 374: 
			echo "Hay una probabilidad del ".binomial($n, $k, 3/1721)*100 ."%";
			break;
		case 387: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/580)*100 ."%";
			break; 
		case 390: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/404)*100 ."%";
			break; 
		case 393: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/359)*100 ."%";
			break; 
		case 401: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/527)*100 ."%";
			break; 
        case 403: 
			echo "Hay una probabilidad del ".binomial($n, $k, 32/2043)*100 ."%";
			break;
		case 412: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/522)*100 ."%";
			break; 
		case 425: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break; 
		case 427: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/542)*100 ."%";
			break; 
		case 436: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/64)*100 ."%";
			break; 
        case 442: 
			echo "Hay una probabilidad del ".binomial($n, $k, 7/399)*100 ."%";
			break;
        case 443: 
			echo "Hay una probabilidad del ".binomial($n, $k, 16/2306)*100 ."%";
			break;
        case 449: 
			echo "Hay una probabilidad del ".binomial($n, $k, 16/6595)*100 ."%";
			break;
        case 451: 
			echo "Hay una probabilidad del ".binomial($n, $k, 13/4886)*100 ."%";
			break;
        case 453: 
			echo "Hay una probabilidad del ".binomial($n, $k, 5/4066)*100 ."%";
			break;
		case 459: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/621)*100 ."%";
			break; 
        case 495: 
			echo "Hay una probabilidad del ".binomial($n, $k, 10/5398)*100 ."%";
			break; 
        case 504: 
			echo "Hay una probabilidad del ".binomial($n, $k, 22/8325)*100 ."%";
			break;
        case 506: 
			echo "Hay una probabilidad del ".binomial($n, $k, 33/11914)*100 ."%";
			break;
        case 519: 
			echo "Hay una probabilidad del ".binomial($n, $k, 5/4135)*100 ."%";
			break;
		case 527: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/587)*100 ."%";
			break; 
        case 532: 
			echo "Hay una probabilidad del ".binomial($n, $k, 17/796)*100 ."%";
			break; 
        case 557: 
			echo "Hay una probabilidad del ".binomial($n, $k, 9/4545)*100 ."%";
			break; 
        case 562: 
			echo "Hay una probabilidad del ".binomial($n, $k, 5/1328)*100 ."%";
			break; 
		case 572: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/542)*100 ."%";
			break; 
        case 594: 
			echo "Hay una probabilidad del ".binomial($n, $k, 10/587)*100 ."%";
			break;
        case 597: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/348)*100 ."%";
			break; 
        case 599: 
			echo "Hay una probabilidad del ".binomial($n, $k, 26/1386)*100 ."%";
			break;
		case 613: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/500)*100 ."%";
			break; 
        case 627: 
			echo "Hay una probabilidad del ".binomial($n, $k, 2/152)*100 ."%";
			break;
		case 631: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/814)*100 ."%";
			break; 
		case 632: 
			echo "Hay una probabilidad del ".binomial($n, $k, 1/341)*100 ."%";
			break;
		case 633: 
			echo "Hay una probabilidad del ".binomial($n, $k, 2/157)*100 ."%";
			break;  
	}

?>

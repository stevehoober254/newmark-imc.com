/*! mobile-detect - v0.4.3 - 2014-12-08
github.com/hgoebl/mobile-detect.js */
!(function (e, i) {
  e(function () {
    "use strict";
    function e(e) {
      for (var i in e) h.call(e, i) && (e[i] = new RegExp(e[i], "i"));
    }
    function t(e, i) {
      for (var t in e) if (h.call(e, t) && e[t].test(i)) return t;
      return null;
    }
    function o(e, i) {
      var t,
        o,
        n,
        s,
        a = p.props;
      if (h.call(a, e))
        for (n = (t = a[e]).length, o = 0; n > o; ++o)
          if (null !== (s = t[o].exec(i))) return s[1];
      return null;
    }
    function n(e, i) {
      var t = o(e, i);
      return t ? s(t) : NaN;
    }
    function s(e) {
      var i;
      return (
        1 === (i = e.split(/[a-z._ \/\-]/i)).length && (e = i[0]),
        i.length > 1 && ((e = i[0] + "."), i.shift(), (e += i.join(""))),
        Number(e)
      );
    }
    function a(e, i) {
      return null != e && null != i && e.toLowerCase() === i.toLowerCase();
    }
    function r(e) {
      return T.fullPattern.test(e) || T.shortPattern.test(e.substr(0, 4));
    }
    function l(e, o, n) {
      var s, a, l;
      if (e.mobile === i)
        return (a = t(p.tablets, o))
          ? ((e.mobile = e.tablet = a), void (e.phone = null))
          : (s = t(p.phones, o))
          ? ((e.mobile = e.phone = s), void (e.tablet = null))
          : void (r(o)
              ? ((l = c.isPhoneSized(n)),
                l === i
                  ? (e.mobile = e.tablet = e.phone = S)
                  : l
                  ? ((e.mobile = e.phone = f), (e.tablet = null))
                  : ((e.mobile = e.tablet = b), (e.phone = null)))
              : (e.mobile = e.tablet = e.phone = null));
    }
    function d(e) {
      var i = null !== e.mobile();
      return (e.os("iOS") && e.version("iPad") >= 4.3) ||
        (e.os("iOS") && e.version("iPhone") >= 3.1) ||
        (e.os("iOS") && e.version("iPod") >= 3.1) ||
        (e.version("Android") > 2.1 && e.is("Webkit")) ||
        e.version("Windows Phone OS") >= 7 ||
        (e.is("BlackBerry") && e.version("BlackBerry") >= 6) ||
        e.match("Playbook.*Tablet") ||
        (e.version("webOS") >= 1.4 && e.match("Palm|Pre|Pixi")) ||
        e.match("hp.*TouchPad") ||
        (e.is("Firefox") && e.version("Firefox") >= 12) ||
        (e.is("Chrome") && e.is("AndroidOS") && e.version("Android") >= 4) ||
        (e.is("Skyfire") &&
          e.version("Skyfire") >= 4.1 &&
          e.is("AndroidOS") &&
          e.version("Android") >= 2.3) ||
        (e.is("Opera") && e.version("Opera Mobi") > 11 && e.is("AndroidOS")) ||
        e.is("MeeGoOS") ||
        e.is("Tizen") ||
        (e.is("Dolfin") && e.version("Bada") >= 2) ||
        ((e.is("UC Browser") || e.is("Dolfin")) &&
          e.version("Android") >= 2.3) ||
        e.match("Kindle Fire") ||
        (e.is("Kindle") && e.version("Kindle") >= 3) ||
        (e.is("AndroidOS") && e.is("NookTablet")) ||
        (e.version("Chrome") >= 11 && !i) ||
        (e.version("Safari") >= 5 && !i) ||
        (e.version("Firefox") >= 4 && !i) ||
        (e.version("MSIE") >= 7 && !i) ||
        (e.version("Opera") >= 10 && !i)
        ? "A"
        : (e.os("iOS") && e.version("iPad") < 4.3) ||
          (e.os("iOS") && e.version("iPhone") < 3.1) ||
          (e.os("iOS") && e.version("iPod") < 3.1) ||
          (e.is("Blackberry") &&
            e.version("BlackBerry") >= 5 &&
            e.version("BlackBerry") < 6) ||
          (e.version("Opera Mini") >= 5 &&
            e.version("Opera Mini") <= 6.5 &&
            (e.version("Android") >= 2.3 || e.is("iOS"))) ||
          e.match("NokiaN8|NokiaC7|N97.*Series60|Symbian/3") ||
          (e.version("Opera Mobi") >= 11 && e.is("SymbianOS"))
        ? "B"
        : (e.version("BlackBerry") < 5 ||
            e.match("MSIEMobile|Windows CE.*Mobile") ||
            e.version("Windows Mobile"),
          "C");
    }
    function c(e, i) {
      (this.ua = e || ""), (this._cache = {}), (this.maxPhoneWidth = i || 650);
    }
    var u,
      p = {
        phones: {
          iPhone: "\\biPhone\\b|\\biPod\\b",
          BlackBerry: "BlackBerry|\\bBB10\\b|rim[0-9]+",
          HTC: "HTC|HTC.*(Sensation|Evo|Vision|Explorer|6800|8100|8900|A7272|S510e|C110e|Legend|Desire|T8282)|APX515CKT|Qtek9090|APA9292KT|HD_mini|Sensation.*Z710e|PG86100|Z715e|Desire.*(A8181|HD)|ADR6200|ADR6400L|ADR6425|001HT|Inspire 4G|Android.*\\bEVO\\b|T-Mobile G1|Z520m",
          Nexus:
            "Nexus One|Nexus S|Galaxy.*Nexus|Android.*Nexus.*Mobile|Nexus 4|Nexus 5|Nexus 6",
          Dell: "Dell.*Streak|Dell.*Aero|Dell.*Venue|DELL.*Venue Pro|Dell Flash|Dell Smoke|Dell Mini 3iX|XCD28|XCD35|\\b001DL\\b|\\b101DL\\b|\\bGS01\\b",
          Motorola:
            "Motorola|DROIDX|DROID BIONIC|\\bDroid\\b.*Build|Android.*Xoom|HRI39|MOT-|A1260|A1680|A555|A853|A855|A953|A955|A956|Motorola.*ELECTRIFY|Motorola.*i1|i867|i940|MB200|MB300|MB501|MB502|MB508|MB511|MB520|MB525|MB526|MB611|MB612|MB632|MB810|MB855|MB860|MB861|MB865|MB870|ME501|ME502|ME511|ME525|ME600|ME632|ME722|ME811|ME860|ME863|ME865|MT620|MT710|MT716|MT720|MT810|MT870|MT917|Motorola.*TITANIUM|WX435|WX445|XT300|XT301|XT311|XT316|XT317|XT319|XT320|XT390|XT502|XT530|XT531|XT532|XT535|XT603|XT610|XT611|XT615|XT681|XT701|XT702|XT711|XT720|XT800|XT806|XT860|XT862|XT875|XT882|XT883|XT894|XT901|XT907|XT909|XT910|XT912|XT928|XT926|XT915|XT919|XT925",
          Samsung:
            "Samsung|SGH-I337|BGT-S5230|GT-B2100|GT-B2700|GT-B2710|GT-B3210|GT-B3310|GT-B3410|GT-B3730|GT-B3740|GT-B5510|GT-B5512|GT-B5722|GT-B6520|GT-B7300|GT-B7320|GT-B7330|GT-B7350|GT-B7510|GT-B7722|GT-B7800|GT-C3010|GT-C3011|GT-C3060|GT-C3200|GT-C3212|GT-C3212I|GT-C3262|GT-C3222|GT-C3300|GT-C3300K|GT-C3303|GT-C3303K|GT-C3310|GT-C3322|GT-C3330|GT-C3350|GT-C3500|GT-C3510|GT-C3530|GT-C3630|GT-C3780|GT-C5010|GT-C5212|GT-C6620|GT-C6625|GT-C6712|GT-E1050|GT-E1070|GT-E1075|GT-E1080|GT-E1081|GT-E1085|GT-E1087|GT-E1100|GT-E1107|GT-E1110|GT-E1120|GT-E1125|GT-E1130|GT-E1160|GT-E1170|GT-E1175|GT-E1180|GT-E1182|GT-E1200|GT-E1210|GT-E1225|GT-E1230|GT-E1390|GT-E2100|GT-E2120|GT-E2121|GT-E2152|GT-E2220|GT-E2222|GT-E2230|GT-E2232|GT-E2250|GT-E2370|GT-E2550|GT-E2652|GT-E3210|GT-E3213|GT-I5500|GT-I5503|GT-I5700|GT-I5800|GT-I5801|GT-I6410|GT-I6420|GT-I7110|GT-I7410|GT-I7500|GT-I8000|GT-I8150|GT-I8160|GT-I8190|GT-I8320|GT-I8330|GT-I8350|GT-I8530|GT-I8700|GT-I8703|GT-I8910|GT-I9000|GT-I9001|GT-I9003|GT-I9010|GT-I9020|GT-I9023|GT-I9070|GT-I9082|GT-I9100|GT-I9103|GT-I9220|GT-I9250|GT-I9300|GT-I9305|GT-I9500|GT-I9505|GT-M3510|GT-M5650|GT-M7500|GT-M7600|GT-M7603|GT-M8800|GT-M8910|GT-N7000|GT-S3110|GT-S3310|GT-S3350|GT-S3353|GT-S3370|GT-S3650|GT-S3653|GT-S3770|GT-S3850|GT-S5210|GT-S5220|GT-S5229|GT-S5230|GT-S5233|GT-S5250|GT-S5253|GT-S5260|GT-S5263|GT-S5270|GT-S5300|GT-S5330|GT-S5350|GT-S5360|GT-S5363|GT-S5369|GT-S5380|GT-S5380D|GT-S5560|GT-S5570|GT-S5600|GT-S5603|GT-S5610|GT-S5620|GT-S5660|GT-S5670|GT-S5690|GT-S5750|GT-S5780|GT-S5830|GT-S5839|GT-S6102|GT-S6500|GT-S7070|GT-S7200|GT-S7220|GT-S7230|GT-S7233|GT-S7250|GT-S7500|GT-S7530|GT-S7550|GT-S7562|GT-S7710|GT-S8000|GT-S8003|GT-S8500|GT-S8530|GT-S8600|SCH-A310|SCH-A530|SCH-A570|SCH-A610|SCH-A630|SCH-A650|SCH-A790|SCH-A795|SCH-A850|SCH-A870|SCH-A890|SCH-A930|SCH-A950|SCH-A970|SCH-A990|SCH-I100|SCH-I110|SCH-I400|SCH-I405|SCH-I500|SCH-I510|SCH-I515|SCH-I600|SCH-I730|SCH-I760|SCH-I770|SCH-I830|SCH-I910|SCH-I920|SCH-I959|SCH-LC11|SCH-N150|SCH-N300|SCH-R100|SCH-R300|SCH-R351|SCH-R400|SCH-R410|SCH-T300|SCH-U310|SCH-U320|SCH-U350|SCH-U360|SCH-U365|SCH-U370|SCH-U380|SCH-U410|SCH-U430|SCH-U450|SCH-U460|SCH-U470|SCH-U490|SCH-U540|SCH-U550|SCH-U620|SCH-U640|SCH-U650|SCH-U660|SCH-U700|SCH-U740|SCH-U750|SCH-U810|SCH-U820|SCH-U900|SCH-U940|SCH-U960|SCS-26UC|SGH-A107|SGH-A117|SGH-A127|SGH-A137|SGH-A157|SGH-A167|SGH-A177|SGH-A187|SGH-A197|SGH-A227|SGH-A237|SGH-A257|SGH-A437|SGH-A517|SGH-A597|SGH-A637|SGH-A657|SGH-A667|SGH-A687|SGH-A697|SGH-A707|SGH-A717|SGH-A727|SGH-A737|SGH-A747|SGH-A767|SGH-A777|SGH-A797|SGH-A817|SGH-A827|SGH-A837|SGH-A847|SGH-A867|SGH-A877|SGH-A887|SGH-A897|SGH-A927|SGH-B100|SGH-B130|SGH-B200|SGH-B220|SGH-C100|SGH-C110|SGH-C120|SGH-C130|SGH-C140|SGH-C160|SGH-C170|SGH-C180|SGH-C200|SGH-C207|SGH-C210|SGH-C225|SGH-C230|SGH-C417|SGH-C450|SGH-D307|SGH-D347|SGH-D357|SGH-D407|SGH-D415|SGH-D780|SGH-D807|SGH-D980|SGH-E105|SGH-E200|SGH-E315|SGH-E316|SGH-E317|SGH-E335|SGH-E590|SGH-E635|SGH-E715|SGH-E890|SGH-F300|SGH-F480|SGH-I200|SGH-I300|SGH-I320|SGH-I550|SGH-I577|SGH-I600|SGH-I607|SGH-I617|SGH-I627|SGH-I637|SGH-I677|SGH-I700|SGH-I717|SGH-I727|SGH-i747M|SGH-I777|SGH-I780|SGH-I827|SGH-I847|SGH-I857|SGH-I896|SGH-I897|SGH-I900|SGH-I907|SGH-I917|SGH-I927|SGH-I937|SGH-I997|SGH-J150|SGH-J200|SGH-L170|SGH-L700|SGH-M110|SGH-M150|SGH-M200|SGH-N105|SGH-N500|SGH-N600|SGH-N620|SGH-N625|SGH-N700|SGH-N710|SGH-P107|SGH-P207|SGH-P300|SGH-P310|SGH-P520|SGH-P735|SGH-P777|SGH-Q105|SGH-R210|SGH-R220|SGH-R225|SGH-S105|SGH-S307|SGH-T109|SGH-T119|SGH-T139|SGH-T209|SGH-T219|SGH-T229|SGH-T239|SGH-T249|SGH-T259|SGH-T309|SGH-T319|SGH-T329|SGH-T339|SGH-T349|SGH-T359|SGH-T369|SGH-T379|SGH-T409|SGH-T429|SGH-T439|SGH-T459|SGH-T469|SGH-T479|SGH-T499|SGH-T509|SGH-T519|SGH-T539|SGH-T559|SGH-T589|SGH-T609|SGH-T619|SGH-T629|SGH-T639|SGH-T659|SGH-T669|SGH-T679|SGH-T709|SGH-T719|SGH-T729|SGH-T739|SGH-T746|SGH-T749|SGH-T759|SGH-T769|SGH-T809|SGH-T819|SGH-T839|SGH-T919|SGH-T929|SGH-T939|SGH-T959|SGH-T989|SGH-U100|SGH-U200|SGH-U800|SGH-V205|SGH-V206|SGH-X100|SGH-X105|SGH-X120|SGH-X140|SGH-X426|SGH-X427|SGH-X475|SGH-X495|SGH-X497|SGH-X507|SGH-X600|SGH-X610|SGH-X620|SGH-X630|SGH-X700|SGH-X820|SGH-X890|SGH-Z130|SGH-Z150|SGH-Z170|SGH-ZX10|SGH-ZX20|SHW-M110|SPH-A120|SPH-A400|SPH-A420|SPH-A460|SPH-A500|SPH-A560|SPH-A600|SPH-A620|SPH-A660|SPH-A700|SPH-A740|SPH-A760|SPH-A790|SPH-A800|SPH-A820|SPH-A840|SPH-A880|SPH-A900|SPH-A940|SPH-A960|SPH-D600|SPH-D700|SPH-D710|SPH-D720|SPH-I300|SPH-I325|SPH-I330|SPH-I350|SPH-I500|SPH-I600|SPH-I700|SPH-L700|SPH-M100|SPH-M220|SPH-M240|SPH-M300|SPH-M305|SPH-M320|SPH-M330|SPH-M350|SPH-M360|SPH-M370|SPH-M380|SPH-M510|SPH-M540|SPH-M550|SPH-M560|SPH-M570|SPH-M580|SPH-M610|SPH-M620|SPH-M630|SPH-M800|SPH-M810|SPH-M850|SPH-M900|SPH-M910|SPH-M920|SPH-M930|SPH-N100|SPH-N200|SPH-N240|SPH-N300|SPH-N400|SPH-Z400|SWC-E100|SCH-i909|GT-N7100|GT-N7105|SCH-I535|SM-N900A|SGH-I317|SGH-T999L|GT-S5360B|GT-I8262|GT-S6802|GT-S6312|GT-S6310|GT-S5312|GT-S5310|GT-I9105|GT-I8510|GT-S6790N|SM-G7105|SM-N9005|GT-S5301|GT-I9295|GT-I9195|SM-C101|GT-S7392|GT-S7560|GT-B7610|GT-I5510|GT-S7582|GT-S7530E|GT-I8750",
          LG: "\\bLG\\b;|LG[- ]?(C800|C900|E400|E610|E900|E-900|F160|F180K|F180L|F180S|730|855|L160|LS740|LS840|LS970|LU6200|MS690|MS695|MS770|MS840|MS870|MS910|P500|P700|P705|VM696|AS680|AS695|AX840|C729|E970|GS505|272|C395|E739BK|E960|L55C|L75C|LS696|LS860|P769BK|P350|P500|P509|P870|UN272|US730|VS840|VS950|LN272|LN510|LS670|LS855|LW690|MN270|MN510|P509|P769|P930|UN200|UN270|UN510|UN610|US670|US740|US760|UX265|UX840|VN271|VN530|VS660|VS700|VS740|VS750|VS910|VS920|VS930|VX9200|VX11000|AX840A|LW770|P506|P925|P999|E612|D955|D802)",
          Sony: "SonyST|SonyLT|SonyEricsson|SonyEricssonLT15iv|LT18i|E10i|LT28h|LT26w|SonyEricssonMT27i|C5303|C6902|C6903|C6906|C6943|D2533",
          Asus: "Asus.*Galaxy|PadFone.*Mobile",
          Micromax:
            "Micromax.*\\b(A210|A92|A88|A72|A111|A110Q|A115|A116|A110|A90S|A26|A51|A35|A54|A25|A27|A89|A68|A65|A57|A90)\\b",
          Palm: "PalmSource|Palm",
          Vertu:
            "Vertu|Vertu.*Ltd|Vertu.*Ascent|Vertu.*Ayxta|Vertu.*Constellation(F|Quest)?|Vertu.*Monika|Vertu.*Signature",
          Pantech:
            "PANTECH|IM-A850S|IM-A840S|IM-A830L|IM-A830K|IM-A830S|IM-A820L|IM-A810K|IM-A810S|IM-A800S|IM-T100K|IM-A725L|IM-A780L|IM-A775C|IM-A770K|IM-A760S|IM-A750K|IM-A740S|IM-A730S|IM-A720L|IM-A710K|IM-A690L|IM-A690S|IM-A650S|IM-A630K|IM-A600S|VEGA PTL21|PT003|P8010|ADR910L|P6030|P6020|P9070|P4100|P9060|P5000|CDM8992|TXT8045|ADR8995|IS11PT|P2030|P6010|P8000|PT002|IS06|CDM8999|P9050|PT001|TXT8040|P2020|P9020|P2000|P7040|P7000|C790",
          Fly: "IQ230|IQ444|IQ450|IQ440|IQ442|IQ441|IQ245|IQ256|IQ236|IQ255|IQ235|IQ245|IQ275|IQ240|IQ285|IQ280|IQ270|IQ260|IQ250",
          iMobile: "i-mobile (IQ|i-STYLE|idea|ZAA|Hitz)",
          SimValley:
            "\\b(SP-80|XT-930|SX-340|XT-930|SX-310|SP-360|SP60|SPT-800|SP-120|SPT-800|SP-140|SPX-5|SPX-8|SP-100|SPX-8|SPX-12)\\b",
          Wolfgang:
            "AT-B24D|AT-AS50HD|AT-AS40W|AT-AS55HD|AT-AS45q2|AT-B26D|AT-AS50Q",
          Alcatel: "Alcatel",
          Nintendo: "Nintendo 3DS",
          Amoi: "Amoi",
          INQ: "INQ",
          GenericPhone:
            "Tapatalk|PDA;|SAGEM|\\bmmp\\b|pocket|\\bpsp\\b|symbian|Smartphone|smartfon|treo|up.browser|up.link|vodafone|\\bwap\\b|nokia|Series40|Series60|S60|SonyEricsson|N900|MAUI.*WAP.*Browser",
        },
        tablets: {
          iPad: "iPad|iPad.*Mobile",
          NexusTablet:
            "Android.*Nexus[\\s]+(7|9|10)|^.*Android.*Nexus(?:(?!Mobile).)*$",
          SamsungTablet:
            "SAMSUNG.*Tablet|Galaxy.*Tab|SC-01C|GT-P1000|GT-P1003|GT-P1010|GT-P3105|GT-P6210|GT-P6800|GT-P6810|GT-P7100|GT-P7300|GT-P7310|GT-P7500|GT-P7510|SCH-I800|SCH-I815|SCH-I905|SGH-I957|SGH-I987|SGH-T849|SGH-T859|SGH-T869|SPH-P100|GT-P3100|GT-P3108|GT-P3110|GT-P5100|GT-P5110|GT-P6200|GT-P7320|GT-P7511|GT-N8000|GT-P8510|SGH-I497|SPH-P500|SGH-T779|SCH-I705|SCH-I915|GT-N8013|GT-P3113|GT-P5113|GT-P8110|GT-N8010|GT-N8005|GT-N8020|GT-P1013|GT-P6201|GT-P7501|GT-N5100|GT-N5105|GT-N5110|SHV-E140K|SHV-E140L|SHV-E140S|SHV-E150S|SHV-E230K|SHV-E230L|SHV-E230S|SHW-M180K|SHW-M180L|SHW-M180S|SHW-M180W|SHW-M300W|SHW-M305W|SHW-M380K|SHW-M380S|SHW-M380W|SHW-M430W|SHW-M480K|SHW-M480S|SHW-M480W|SHW-M485W|SHW-M486W|SHW-M500W|GT-I9228|SCH-P739|SCH-I925|GT-I9200|GT-I9205|GT-P5200|GT-P5210|GT-P5210X|SM-T311|SM-T310|SM-T310X|SM-T210|SM-T210R|SM-T211|SM-P600|SM-P601|SM-P605|SM-P900|SM-P901|SM-T217|SM-T217A|SM-T217S|SM-P6000|SM-T3100|SGH-I467|XE500|SM-T110|GT-P5220|GT-I9200X|GT-N5110X|GT-N5120|SM-P905|SM-T111|SM-T2105|SM-T315|SM-T320|SM-T320X|SM-T321|SM-T520|SM-T525|SM-T530NU|SM-T230NU|SM-T330NU|SM-T900|XE500T1C|SM-P605V|SM-P905V|SM-P600X|SM-P900X|SM-T210X|SM-T230|SM-T230X|SM-T325|GT-P7503|SM-T531|SM-T330|SM-T530|SM-T705C|SM-T535|SM-T331|SM-T800|SM-T700|SM-T537|SM-T807|SM-P907A|SM-T337A|SM-T707A|SM-T807A|SM-T237P|SM-T807P|SM-P607T|SM-T217T|SM-T337T",
          Kindle:
            "Kindle|Silk.*Accelerated|Android.*\\b(KFOT|KFTT|KFJWI|KFJWA|KFOTE|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|WFJWAE|KFSAWA|KFSAWI|KFASWI)\\b",
          SurfaceTablet: "Windows NT [0-9.]+; ARM;.*(Tablet|ARMBJS)",
          HPTablet:
            "HP Slate (7|8|10)|HP ElitePad 900|hp-tablet|EliteBook.*Touch|HP 8|Slate 21|HP SlateBook 10",
          AsusTablet:
            "^.*PadFone((?!Mobile).)*$|Transformer|TF101|TF101G|TF300T|TF300TG|TF300TL|TF700T|TF700KL|TF701T|TF810C|ME171|ME301T|ME302C|ME371MG|ME370T|ME372MG|ME172V|ME173X|ME400C|Slider SL101|\\bK00F\\b|\\bK00C\\b|\\bK00E\\b|\\bK00L\\b|TX201LA|ME176C|ME102A|\\bM80TA\\b|ME372CL|ME560CG|ME372CG",
          BlackBerryTablet: "PlayBook|RIM Tablet",
          HTCtablet:
            "HTC_Flyer_P512|HTC Flyer|HTC Jetstream|HTC-P715a|HTC EVO View 4G|PG41200|PG09410",
          MotorolaTablet:
            "xoom|sholest|MZ615|MZ605|MZ505|MZ601|MZ602|MZ603|MZ604|MZ606|MZ607|MZ608|MZ609|MZ615|MZ616|MZ617",
          NookTablet:
            "Android.*Nook|NookColor|nook browser|BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2",
          AcerTablet:
            "Android.*; \\b(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700|A701|W500|W500P|W501|W501P|W510|W511|W700|G100|G100W|B1-A71|B1-710|B1-711|A1-810|A1-811|A1-830)\\b|W3-810|\\bA3-A10\\b",
          ToshibaTablet:
            "Android.*(AT100|AT105|AT200|AT205|AT270|AT275|AT300|AT305|AT1S5|AT500|AT570|AT700|AT830)|TOSHIBA.*FOLIO",
          LGTablet:
            "\\bL-06C|LG-V909|LG-V900|LG-V700|LG-V510|LG-V500|LG-V410|LG-V400|LG-VK810\\b",
          FujitsuTablet: "Android.*\\b(F-01D|F-02F|F-05E|F-10D|M532|Q572)\\b",
          PrestigioTablet:
            "PMP3170B|PMP3270B|PMP3470B|PMP7170B|PMP3370B|PMP3570C|PMP5870C|PMP3670B|PMP5570C|PMP5770D|PMP3970B|PMP3870C|PMP5580C|PMP5880D|PMP5780D|PMP5588C|PMP7280C|PMP7280C3G|PMP7280|PMP7880D|PMP5597D|PMP5597|PMP7100D|PER3464|PER3274|PER3574|PER3884|PER5274|PER5474|PMP5097CPRO|PMP5097|PMP7380D|PMP5297C|PMP5297C_QUAD",
          LenovoTablet:
            "Idea(Tab|Pad)( A1|A10| K1|)|ThinkPad([ ]+)?Tablet|Lenovo.*(S2109|S2110|S5000|S6000|K3011|A3000|A3500|A1000|A2107|A2109|A1107|A5500|A7600|B6000|B8000|B8080)(-|)(FL|F|HV|H|)",
          DellTablet: "Venue 11|Venue 8|Venue 7|Dell Streak 10|Dell Streak 7",
          YarvikTablet:
            "Android.*\\b(TAB210|TAB211|TAB224|TAB250|TAB260|TAB264|TAB310|TAB360|TAB364|TAB410|TAB411|TAB420|TAB424|TAB450|TAB460|TAB461|TAB464|TAB465|TAB467|TAB468|TAB07-100|TAB07-101|TAB07-150|TAB07-151|TAB07-152|TAB07-200|TAB07-201-3G|TAB07-210|TAB07-211|TAB07-212|TAB07-214|TAB07-220|TAB07-400|TAB07-485|TAB08-150|TAB08-200|TAB08-201-3G|TAB08-201-30|TAB09-100|TAB09-211|TAB09-410|TAB10-150|TAB10-201|TAB10-211|TAB10-400|TAB10-410|TAB13-201|TAB274EUK|TAB275EUK|TAB374EUK|TAB462EUK|TAB474EUK|TAB9-200)\\b",
          MedionTablet:
            "Android.*\\bOYO\\b|LIFE.*(P9212|P9514|P9516|S9512)|LIFETAB",
          ArnovaTablet:
            "AN10G2|AN7bG3|AN7fG3|AN8G3|AN8cG3|AN7G3|AN9G3|AN7dG3|AN7dG3ST|AN7dG3ChildPad|AN10bG3|AN10bG3DT|AN9G2",
          IntensoTablet: "INM8002KP|INM1010FP|INM805ND|Intenso Tab|TAB1004",
          IRUTablet: "M702pro",
          MegafonTablet: "MegaFon V9|\\bZTE V9\\b|Android.*\\bMT7A\\b",
          EbodaTablet: "E-Boda (Supreme|Impresspeed|Izzycomm|Essential)",
          AllViewTablet:
            "Allview.*(Viva|Alldro|City|Speed|All TV|Frenzy|Quasar|Shine|TX1|AX1|AX2)",
          ArchosTablet:
            "\\b(101G9|80G9|A101IT)\\b|Qilive 97R|Archos5|\\bARCHOS (70|79|80|90|97|101|FAMILYPAD|)(b|)(G10| Cobalt| TITANIUM(HD|)| Xenon| Neon|XSK| 2| XS 2| PLATINUM| CARBON|GAMEPAD)\\b",
          AinolTablet:
            "NOVO7|NOVO8|NOVO10|Novo7Aurora|Novo7Basic|NOVO7PALADIN|novo9-Spark",
          SonyTablet:
            "Sony.*Tablet|Xperia Tablet|Sony Tablet S|SO-03E|SGPT12|SGPT13|SGPT114|SGPT121|SGPT122|SGPT123|SGPT111|SGPT112|SGPT113|SGPT131|SGPT132|SGPT133|SGPT211|SGPT212|SGPT213|SGP311|SGP312|SGP321|EBRD1101|EBRD1102|EBRD1201|SGP351|SGP341|SGP511|SGP512|SGP521|SGP541|SGP551",
          PhilipsTablet:
            "\\b(PI2010|PI3000|PI3100|PI3105|PI3110|PI3205|PI3210|PI3900|PI4010|PI7000|PI7100)\\b",
          CubeTablet:
            "Android.*(K8GT|U9GT|U10GT|U16GT|U17GT|U18GT|U19GT|U20GT|U23GT|U30GT)|CUBE U8GT",
          CobyTablet:
            "MID1042|MID1045|MID1125|MID1126|MID7012|MID7014|MID7015|MID7034|MID7035|MID7036|MID7042|MID7048|MID7127|MID8042|MID8048|MID8127|MID9042|MID9740|MID9742|MID7022|MID7010",
          MIDTablet:
            "M9701|M9000|M9100|M806|M1052|M806|T703|MID701|MID713|MID710|MID727|MID760|MID830|MID728|MID933|MID125|MID810|MID732|MID120|MID930|MID800|MID731|MID900|MID100|MID820|MID735|MID980|MID130|MID833|MID737|MID960|MID135|MID860|MID736|MID140|MID930|MID835|MID733",
          MSITablet:
            "MSI \\b(Primo 73K|Primo 73L|Primo 81L|Primo 77|Primo 93|Primo 75|Primo 76|Primo 73|Primo 81|Primo 91|Primo 90|Enjoy 71|Enjoy 7|Enjoy 10)\\b",
          SMiTTablet:
            "Android.*(\\bMID\\b|MID-560|MTV-T1200|MTV-PND531|MTV-P1101|MTV-PND530)",
          RockChipTablet:
            "Android.*(RK2818|RK2808A|RK2918|RK3066)|RK2738|RK2808A",
          FlyTablet: "IQ310|Fly Vision",
          bqTablet:
            "bq.*(Elcano|Curie|Edison|Maxwell|Kepler|Pascal|Tesla|Hypatia|Platon|Newton|Livingstone|Cervantes|Avant)|Maxwell.*Lite|Maxwell.*Plus",
          HuaweiTablet:
            "MediaPad|MediaPad 7 Youth|IDEOS S7|S7-201c|S7-202u|S7-101|S7-103|S7-104|S7-105|S7-106|S7-201|S7-Slim",
          NecTablet: "\\bN-06D|\\bN-08D",
          PantechTablet: "Pantech.*P4100",
          BronchoTablet: "Broncho.*(N701|N708|N802|a710)",
          VersusTablet: "TOUCHPAD.*[78910]|\\bTOUCHTAB\\b",
          ZyncTablet: "z1000|Z99 2G|z99|z930|z999|z990|z909|Z919|z900",
          PositivoTablet: "TB07STA|TB10STA|TB07FTA|TB10FTA",
          NabiTablet: "Android.*\\bNabi",
          KoboTablet: "Kobo Touch|\\bK080\\b|\\bVox\\b Build|\\bArc\\b Build",
          DanewTablet:
            "DSlide.*\\b(700|701R|702|703R|704|802|970|971|972|973|974|1010|1012)\\b",
          TexetTablet:
            "NaviPad|TB-772A|TM-7045|TM-7055|TM-9750|TM-7016|TM-7024|TM-7026|TM-7041|TM-7043|TM-7047|TM-8041|TM-9741|TM-9747|TM-9748|TM-9751|TM-7022|TM-7021|TM-7020|TM-7011|TM-7010|TM-7023|TM-7025|TM-7037W|TM-7038W|TM-7027W|TM-9720|TM-9725|TM-9737W|TM-1020|TM-9738W|TM-9740|TM-9743W|TB-807A|TB-771A|TB-727A|TB-725A|TB-719A|TB-823A|TB-805A|TB-723A|TB-715A|TB-707A|TB-705A|TB-709A|TB-711A|TB-890HD|TB-880HD|TB-790HD|TB-780HD|TB-770HD|TB-721HD|TB-710HD|TB-434HD|TB-860HD|TB-840HD|TB-760HD|TB-750HD|TB-740HD|TB-730HD|TB-722HD|TB-720HD|TB-700HD|TB-500HD|TB-470HD|TB-431HD|TB-430HD|TB-506|TB-504|TB-446|TB-436|TB-416|TB-146SE|TB-126SE",
          PlaystationTablet: "Playstation.*(Portable|Vita)",
          TrekstorTablet:
            "ST10416-1|VT10416-1|ST70408-1|ST702xx-1|ST702xx-2|ST80208|ST97216|ST70104-2|VT10416-2|ST10216-2A|SurfTab",
          PyleAudioTablet:
            "\\b(PTBL10CEU|PTBL10C|PTBL72BC|PTBL72BCEU|PTBL7CEU|PTBL7C|PTBL92BC|PTBL92BCEU|PTBL9CEU|PTBL9CUK|PTBL9C)\\b",
          AdvanTablet:
            "Android.* \\b(E3A|T3X|T5C|T5B|T3E|T3C|T3B|T1J|T1F|T2A|T1H|T1i|E1C|T1-E|T5-A|T4|E1-B|T2Ci|T1-B|T1-D|O1-A|E1-A|T1-A|T3A|T4i)\\b ",
          DanyTechTablet:
            "Genius Tab G3|Genius Tab S2|Genius Tab Q3|Genius Tab G4|Genius Tab Q4|Genius Tab G-II|Genius TAB GII|Genius TAB GIII|Genius Tab S1",
          GalapadTablet: "Android.*\\bG1\\b",
          MicromaxTablet:
            "Funbook|Micromax.*\\b(P250|P560|P360|P362|P600|P300|P350|P500|P275)\\b",
          KarbonnTablet:
            "Android.*\\b(A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2)\\b",
          AllFineTablet:
            "Fine7 Genius|Fine7 Shine|Fine7 Air|Fine8 Style|Fine9 More|Fine10 Joy|Fine11 Wide",
          PROSCANTablet:
            "\\b(PEM63|PLT1023G|PLT1041|PLT1044|PLT1044G|PLT1091|PLT4311|PLT4311PL|PLT4315|PLT7030|PLT7033|PLT7033D|PLT7035|PLT7035D|PLT7044K|PLT7045K|PLT7045KB|PLT7071KG|PLT7072|PLT7223G|PLT7225G|PLT7777G|PLT7810K|PLT7849G|PLT7851G|PLT7852G|PLT8015|PLT8031|PLT8034|PLT8036|PLT8080K|PLT8082|PLT8088|PLT8223G|PLT8234G|PLT8235G|PLT8816K|PLT9011|PLT9045K|PLT9233G|PLT9735|PLT9760G|PLT9770G)\\b",
          YONESTablet:
            "BQ1078|BC1003|BC1077|RK9702|BC9730|BC9001|IT9001|BC7008|BC7010|BC708|BC728|BC7012|BC7030|BC7027|BC7026",
          ChangJiaTablet:
            "TPC7102|TPC7103|TPC7105|TPC7106|TPC7107|TPC7201|TPC7203|TPC7205|TPC7210|TPC7708|TPC7709|TPC7712|TPC7110|TPC8101|TPC8103|TPC8105|TPC8106|TPC8203|TPC8205|TPC8503|TPC9106|TPC9701|TPC97101|TPC97103|TPC97105|TPC97106|TPC97111|TPC97113|TPC97203|TPC97603|TPC97809|TPC97205|TPC10101|TPC10103|TPC10106|TPC10111|TPC10203|TPC10205|TPC10503",
          GUTablet: "TX-A1301|TX-M9002|Q702|kf026",
          PointOfViewTablet:
            "TAB-P506|TAB-navi-7-3G-M|TAB-P517|TAB-P-527|TAB-P701|TAB-P703|TAB-P721|TAB-P731N|TAB-P741|TAB-P825|TAB-P905|TAB-P925|TAB-PR945|TAB-PL1015|TAB-P1025|TAB-PI1045|TAB-P1325|TAB-PROTAB[0-9]+|TAB-PROTAB25|TAB-PROTAB26|TAB-PROTAB27|TAB-PROTAB26XL|TAB-PROTAB2-IPS9|TAB-PROTAB30-IPS9|TAB-PROTAB25XXL|TAB-PROTAB26-IPS10|TAB-PROTAB30-IPS10",
          OvermaxTablet:
            "OV-(SteelCore|NewBase|Basecore|Baseone|Exellen|Quattor|EduTab|Solution|ACTION|BasicTab|TeddyTab|MagicTab|Stream|TB-08|TB-09)",
          HCLTablet:
            "HCL.*Tablet|Connect-3G-2.0|Connect-2G-2.0|ME Tablet U1|ME Tablet U2|ME Tablet G1|ME Tablet X1|ME Tablet Y2|ME Tablet Sync",
          DPSTablet: "DPS Dream 9|DPS Dual 7",
          VistureTablet:
            "V97 HD|i75 3G|Visture V4( HD)?|Visture V5( HD)?|Visture V10",
          CrestaTablet:
            "CTP(-)?810|CTP(-)?818|CTP(-)?828|CTP(-)?838|CTP(-)?888|CTP(-)?978|CTP(-)?980|CTP(-)?987|CTP(-)?988|CTP(-)?989",
          MediatekTablet: "\\bMT8125|MT8389|MT8135|MT8377\\b",
          ConcordeTablet: "Concorde([ ]+)?Tab|ConCorde ReadMan",
          GoCleverTablet:
            "GOCLEVER TAB|A7GOCLEVER|M1042|M7841|M742|R1042BK|R1041|TAB A975|TAB A7842|TAB A741|TAB A741L|TAB M723G|TAB M721|TAB A1021|TAB I921|TAB R721|TAB I720|TAB T76|TAB R70|TAB R76.2|TAB R106|TAB R83.2|TAB M813G|TAB I721|GCTA722|TAB I70|TAB I71|TAB S73|TAB R73|TAB R74|TAB R93|TAB R75|TAB R76.1|TAB A73|TAB A93|TAB A93.2|TAB T72|TAB R83|TAB R974|TAB R973|TAB A101|TAB A103|TAB A104|TAB A104.2|R105BK|M713G|A972BK|TAB A971|TAB R974.2|TAB R104|TAB R83.3|TAB A1042",
          ModecomTablet:
            "FreeTAB 9000|FreeTAB 7.4|FreeTAB 7004|FreeTAB 7800|FreeTAB 2096|FreeTAB 7.5|FreeTAB 1014|FreeTAB 1001 |FreeTAB 8001|FreeTAB 9706|FreeTAB 9702|FreeTAB 7003|FreeTAB 7002|FreeTAB 1002|FreeTAB 7801|FreeTAB 1331|FreeTAB 1004|FreeTAB 8002|FreeTAB 8014|FreeTAB 9704|FreeTAB 1003",
          VoninoTablet:
            "\\b(Argus[ _]?S|Diamond[ _]?79HD|Emerald[ _]?78E|Luna[ _]?70C|Onyx[ _]?S|Onyx[ _]?Z|Orin[ _]?HD|Orin[ _]?S|Otis[ _]?S|SpeedStar[ _]?S|Magnet[ _]?M9|Primus[ _]?94[ _]?3G|Primus[ _]?94HD|Primus[ _]?QS|Android.*\\bQ8\\b|Sirius[ _]?EVO[ _]?QS|Sirius[ _]?QS|Spirit[ _]?S)\\b",
          ECSTablet: "V07OT2|TM105A|S10OT1|TR10CS1",
          StorexTablet: "eZee[_']?(Tab|Go)[0-9]+|TabLC7|Looney Tunes Tab",
          VodafoneTablet: "SmartTab([ ]+)?[0-9]+|SmartTabII10|SmartTabII7",
          EssentielBTablet: "Smart[ ']?TAB[ ]+?[0-9]+|Family[ ']?TAB2",
          RossMoorTablet:
            "RM-790|RM-997|RMD-878G|RMD-974R|RMT-705A|RMT-701|RME-601|RMT-501|RMT-711",
          iMobileTablet: "i-mobile i-note",
          TolinoTablet: "tolino tab [0-9.]+|tolino shine",
          AudioSonicTablet: "\\bC-22Q|T7-QC|T-17B|T-17P\\b",
          AMPETablet: "Android.* A78 ",
          SkkTablet: "Android.* (SKYPAD|PHOENIX|CYCLOPS)",
          TecnoTablet: "TECNO P9",
          JXDTablet:
            "Android.*\\b(F3000|A3300|JXD5000|JXD3000|JXD2000|JXD300B|JXD300|S5800|S7800|S602b|S5110b|S7300|S5300|S602|S603|S5100|S5110|S601|S7100a|P3000F|P3000s|P101|P200s|P1000m|P200m|P9100|P1000s|S6600b|S908|P1000|P300|S18|S6600|S9100)\\b",
          iJoyTablet:
            "Tablet (Spirit 7|Essentia|Galatea|Fusion|Onix 7|Landa|Titan|Scooby|Deox|Stella|Themis|Argon|Unique 7|Sygnus|Hexen|Finity 7|Cream|Cream X2|Jade|Neon 7|Neron 7|Kandy|Scape|Saphyr 7|Rebel|Biox|Rebel|Rebel 8GB|Myst|Draco 7|Myst|Tab7-004|Myst|Tadeo Jones|Tablet Boing|Arrow|Draco Dual Cam|Aurix|Mint|Amity|Revolution|Finity 9|Neon 9|T9w|Amity 4GB Dual Cam|Stone 4GB|Stone 8GB|Andromeda|Silken|X2|Andromeda II|Halley|Flame|Saphyr 9,7|Touch 8|Planet|Triton|Unique 10|Hexen 10|Memphis 4GB|Memphis 8GB|Onix 10)",
          FX2Tablet: "FX2 PAD7|FX2 PAD10",
          XoroTablet:
            "KidsPAD 701|PAD[ ]?712|PAD[ ]?714|PAD[ ]?716|PAD[ ]?717|PAD[ ]?718|PAD[ ]?720|PAD[ ]?721|PAD[ ]?722|PAD[ ]?790|PAD[ ]?792|PAD[ ]?900|PAD[ ]?9715D|PAD[ ]?9716DR|PAD[ ]?9718DR|PAD[ ]?9719QR|PAD[ ]?9720QR|TelePAD1030|Telepad1032|TelePAD730|TelePAD731|TelePAD732|TelePAD735Q|TelePAD830|TelePAD9730|TelePAD795|MegaPAD 1331|MegaPAD 1851|MegaPAD 2151",
          ViewsonicTablet:
            "ViewPad 10pi|ViewPad 10e|ViewPad 10s|ViewPad E72|ViewPad7|ViewPad E100|ViewPad 7e|ViewSonic VB733|VB100a",
          OdysTablet:
            "LOOX|XENO10|ODYS[ -](Space|EVO|Xpress|NOON)|\\bXELIO\\b|Xelio10Pro|XELIO7PHONETAB|XELIO10EXTREME|XELIOPT2|NEO_QUAD10",
          CaptivaTablet: "CAPTIVA PAD",
          IconbitTablet:
            "NetTAB|NT-3702|NT-3702S|NT-3702S|NT-3603P|NT-3603P|NT-0704S|NT-0704S|NT-3805C|NT-3805C|NT-0806C|NT-0806C|NT-0909T|NT-0909T|NT-0907S|NT-0907S|NT-0902S|NT-0902S",
          TeclastTablet:
            "T98 4G|\\bP80\\b|\\bX90HD\\b|X98 Air|X98 Air 3G|\\bX89\\b|P80 3G|\\bX80h\\b|P98 Air|\\bX89HD\\b|P98 3G|\\bP90HD\\b|P89 3G|X98 3G|\\bP70h\\b|P79HD 3G|G18d 3G|\\bP79HD\\b|\\bP89s\\b|\\bA88\\b|\\bP10HD\\b|\\bP19HD\\b|G18 3G|\\bP78HD\\b|\\bA78\\b|\\bP75\\b|G17s 3G|G17h 3G|\\bP85t\\b|\\bP90\\b|\\bP11\\b|\\bP98t\\b|\\bP98HD\\b|\\bG18d\\b|\\bP85s\\b|\\bP11HD\\b|\\bP88s\\b|\\bA80HD\\b|\\bA80se\\b|\\bA10h\\b|\\bP89\\b|\\bP78s\\b|\\bG18\\b|\\bP85\\b|\\bA70h\\b|\\bA70\\b|\\bG17\\b|\\bP18\\b|\\bA80s\\b|\\bA11s\\b|\\bP88HD\\b|\\bA80h\\b|\\bP76s\\b|\\bP76h\\b|\\bP98\\b|\\bA10HD\\b|\\bP78\\b|\\bP88\\b|\\bA11\\b|\\bA10t\\b|\\bP76a\\b|\\bP76t\\b|\\bP76e\\b|\\bP85HD\\b|\\bP85a\\b|\\bP86\\b|\\bP75HD\\b|\\bP76v\\b|\\bA12\\b|\\bP75a\\b|\\bA15\\b|\\bP76Ti\\b|\\bP81HD\\b|\\bA10\\b|\\bT760VE\\b|\\bT720HD\\b|\\bP76\\b|\\bP73\\b|\\bP71\\b|\\bP72\\b|\\bT720SE\\b|\\bC520Ti\\b|\\bT760\\b|\\bT720VE\\b|T720-3GE|T720-WiFi",
          JaytechTablet: "TPC-PA762",
          BlaupunktTablet: "Endeavour 800NG|Endeavour 1010",
          DigmaTablet:
            "\\b(iDx10|iDx9|iDx8|iDx7|iDxD7|iDxD8|iDsQ8|iDsQ7|iDsQ8|iDsD10|iDnD7|3TS804H|iDsQ11|iDj7|iDs10)\\b",
          EvolioTablet:
            "ARIA_Mini_wifi|Aria[ _]Mini|Evolio X10|Evolio X7|Evolio X8|\\bEvotab\\b|\\bNeura\\b",
          LavaTablet: "QPAD E704|\\bIvoryS\\b|E-TAB IVORY",
          CelkonTablet:
            "CT695|CT888|CT[\\s]?910|CT7 Tab|CT9 Tab|CT3 Tab|CT2 Tab|CT1 Tab|C820|C720|\\bCT-1\\b",
          MiTablet: "\\bMI PAD\\b|\\bHM NOTE 1W\\b",
          NibiruTablet: "Nibiru M1|Nibiru Jupiter One",
          NexoTablet:
            "NEXO NOVA|NEXO 10|NEXO AVIO|NEXO FREE|NEXO GO|NEXO EVO|NEXO 3G|NEXO SMART|NEXO KIDDO|NEXO MOBI",
          UbislateTablet: "UbiSlate[\\s]?7C",
          PocketBookTablet: "Pocketbook",
          Hudl: "Hudl HT7S3",
          TelstraTablet: "T-Hub2",
          GenericTablet:
            "Android.*\\b97D\\b|Tablet(?!.*PC)|BNTV250A|MID-WCDMA|LogicPD Zoom2|\\bA7EB\\b|CatNova8|A1_07|CT704|CT1002|\\bM721\\b|rk30sdk|\\bEVOTAB\\b|M758A|ET904|ALUMIUM10|Smartfren Tab|Endeavour 1010|Tablet-PC-4|Tagi Tab|\\bM6pro\\b|CT1020W|arc 10HD|\\bJolla\\b",
        },
        oss: {
          AndroidOS: "Android",
          BlackBerryOS: "blackberry|\\bBB10\\b|rim tablet os",
          PalmOS: "PalmOS|avantgo|blazer|elaine|hiptop|palm|plucker|xiino",
          SymbianOS: "Symbian|SymbOS|Series60|Series40|SYB-[0-9]+|\\bS60\\b",
          WindowsMobileOS:
            "Windows CE.*(PPC|Smartphone|Mobile|[0-9]{3}x[0-9]{3})|Window Mobile|Windows Phone [0-9.]+|WCE;",
          WindowsPhoneOS:
            "Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7|Windows NT 6.[23]; ARM;",
          iOS: "\\biPhone.*Mobile|\\biPod|\\biPad",
          MeeGoOS: "MeeGo",
          MaemoOS: "Maemo",
          JavaOS: "J2ME/|\\bMIDP\\b|\\bCLDC\\b",
          webOS: "webOS|hpwOS",
          badaOS: "\\bBada\\b",
          BREWOS: "BREW",
        },
        uas: {
          Chrome: "\\bCrMo\\b|CriOS|Android.*Chrome/[.0-9]* (Mobile)?",
          Dolfin: "\\bDolfin\\b",
          Opera:
            "Opera.*Mini|Opera.*Mobi|Android.*Opera|Mobile.*OPR/[0-9.]+|Coast/[0-9.]+",
          Skyfire: "Skyfire",
          IE: "IEMobile|MSIEMobile",
          Firefox:
            "fennec|firefox.*maemo|(Mobile|Tablet).*Firefox|Firefox.*Mobile",
          Bolt: "bolt",
          TeaShark: "teashark",
          Blazer: "Blazer",
          Safari: "Version.*Mobile.*Safari|Safari.*Mobile|MobileSafari",
          Tizen: "Tizen",
          UCBrowser: "UC.*Browser|UCWEB",
          baiduboxapp: "baiduboxapp",
          baidubrowser: "baidubrowser",
          DiigoBrowser: "DiigoBrowser",
          Puffin: "Puffin",
          Mercury: "\\bMercury\\b",
          ObigoBrowser: "Obigo",
          NetFront: "NF-Browser",
          GenericBrowser:
            "NokiaBrowser|OviBrowser|OneBrowser|TwonkyBeamBrowser|SEMC.*Browser|FlyFlow|Minimo|NetFront|Novarra-Vision|MQQBrowser|MicroMessenger",
        },
        props: {
          Mobile: "Mobile/[VER]",
          Build: "Build/[VER]",
          Version: "Version/[VER]",
          VendorID: "VendorID/[VER]",
          iPad: "iPad.*CPU[a-z ]+[VER]",
          iPhone: "iPhone.*CPU[a-z ]+[VER]",
          iPod: "iPod.*CPU[a-z ]+[VER]",
          Kindle: "Kindle/[VER]",
          Chrome: ["Chrome/[VER]", "CriOS/[VER]", "CrMo/[VER]"],
          Coast: ["Coast/[VER]"],
          Dolfin: "Dolfin/[VER]",
          Firefox: "Firefox/[VER]",
          Fennec: "Fennec/[VER]",
          IE: ["IEMobile/[VER];", "IEMobile [VER]", "MSIE [VER];"],
          NetFront: "NetFront/[VER]",
          NokiaBrowser: "NokiaBrowser/[VER]",
          Opera: [" OPR/[VER]", "Opera Mini/[VER]", "Version/[VER]"],
          "Opera Mini": "Opera Mini/[VER]",
          "Opera Mobi": "Version/[VER]",
          "UC Browser": "UC Browser[VER]",
          MQQBrowser: "MQQBrowser/[VER]",
          MicroMessenger: "MicroMessenger/[VER]",
          baiduboxapp: "baiduboxapp/[VER]",
          baidubrowser: "baidubrowser/[VER]",
          Iron: "Iron/[VER]",
          Safari: ["Version/[VER]", "Safari/[VER]"],
          Skyfire: "Skyfire/[VER]",
          Tizen: "Tizen/[VER]",
          Webkit: "webkit[ /][VER]",
          Gecko: "Gecko/[VER]",
          Trident: "Trident/[VER]",
          Presto: "Presto/[VER]",
          iOS: " \\bOS\\b [VER] ",
          Android: "Android [VER]",
          BlackBerry: [
            "BlackBerry[\\w]+/[VER]",
            "BlackBerry.*Version/[VER]",
            "Version/[VER]",
          ],
          BREW: "BREW [VER]",
          Java: "Java/[VER]",
          "Windows Phone OS": ["Windows Phone OS [VER]", "Windows Phone [VER]"],
          "Windows Phone": "Windows Phone [VER]",
          "Windows CE": "Windows CE/[VER]",
          "Windows NT": "Windows NT [VER]",
          Symbian: ["SymbianOS/[VER]", "Symbian/[VER]"],
          webOS: ["webOS/[VER]", "hpwOS/[VER];"],
        },
        utils: {
          DesktopMode: "WPDesktop",
          TV: "SonyDTV|HbbTV",
          WebKit: "(webkit)[ /]([\\w.]+)",
          Bot: "Googlebot|YandexBot|bingbot|ia_archiver|AhrefsBot|Ezooms|GSLFbot|WBSearchBot|Twitterbot|TweetmemeBot|Twikle|PaperLiBot|Wotbox|UnwindFetchor|facebookexternalhit",
          MobileBot: "Googlebot-Mobile|YahooSeeker/M1A1-R2D2",
          Console:
            "\\b(Nintendo|Nintendo WiiU|Nintendo 3DS|PLAYSTATION|Xbox)\\b",
          Watch: "SM-V700",
        },
      },
      T = {
        fullPattern:
          /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i,
        shortPattern:
          /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
      },
      h = Object.prototype.hasOwnProperty,
      f = "UnknownPhone",
      b = "UnknownTablet",
      S = "UnknownMobile";
    return (
      (u =
        "isArray" in Array
          ? Array.isArray
          : function (e) {
              return "[object Array]" === Object.prototype.toString.call(e);
            }),
      (function () {
        var i, t, o, n, s, a;
        for (i in p.props)
          if (h.call(p.props, i)) {
            for (
              t = p.props[i], u(t) || (t = [t]), s = t.length, n = 0;
              s > n;
              ++n
            )
              (a = (o = t[n]).indexOf("[VER]")) >= 0 &&
                (o = o.substring(0, a) + "([\\w._\\+]+)" + o.substring(a + 5)),
                (t[n] = new RegExp(o, "i"));
            p.props[i] = t;
          }
        e(p.oss),
          e(p.phones),
          e(p.tablets),
          e(p.uas),
          e(p.utils),
          (p.oss0 = {
            WindowsPhoneOS: p.oss.WindowsPhoneOS,
            WindowsMobileOS: p.oss.WindowsMobileOS,
          });
      })(),
      (c.prototype = {
        constructor: c,
        mobile: function () {
          return (
            l(this._cache, this.ua, this.maxPhoneWidth), this._cache.mobile
          );
        },
        phone: function () {
          return l(this._cache, this.ua, this.maxPhoneWidth), this._cache.phone;
        },
        tablet: function () {
          return (
            l(this._cache, this.ua, this.maxPhoneWidth), this._cache.tablet
          );
        },
        userAgent: function () {
          return (
            this._cache.userAgent === i &&
              (this._cache.userAgent = t(p.uas, this.ua)),
            this._cache.userAgent
          );
        },
        os: function () {
          return (
            this._cache.os === i &&
              (this._cache.os = t(p.oss0, this.ua) || t(p.oss, this.ua)),
            this._cache.os
          );
        },
        version: function (e) {
          return n(e, this.ua);
        },
        versionStr: function (e) {
          return o(e, this.ua);
        },
        is: function (e) {
          return (
            a(e, this.userAgent()) ||
            a(e, this.os()) ||
            a(e, this.phone()) ||
            a(e, this.tablet()) ||
            a(e, t(p.utils, this.ua))
          );
        },
        match: function (e) {
          return (
            e instanceof RegExp || (e = new RegExp(e, "i")), e.test(this.ua)
          );
        },
        isPhoneSized: function (e) {
          return c.isPhoneSized(e || this.maxPhoneWidth);
        },
        mobileGrade: function () {
          return (
            this._cache.grade === i && (this._cache.grade = d(this)),
            this._cache.grade
          );
        },
      }),
      (c.isPhoneSized =
        "undefined" != typeof window && window.screen && window.screen.width
          ? function (e) {
              return 0 > e
                ? i
                : e >= window.screen.width / (window.devicePixelRatio || 1);
              var t, o, n;
            }
          : function () {}),
      c
    );
  });
})(
  (function () {
    if ("function" == typeof define && define.amd) return define;
    if ("undefined" != typeof module && module.exports)
      return function (e) {
        module.exports = e();
      };
    if ("undefined" != typeof window)
      return function (e) {
        window.MobileDetect = e();
      };
    throw new Error("unknown environment");
  })()
),
  (function (e) {
    "use strict";
    "function" == typeof define && define.amd
      ? define(["jquery"], e)
      : "undefined" != typeof exports
      ? (module.exports = e(require("jquery")))
      : e(jQuery);
  })(function (e) {
    "use strict";
    var i = window.Slick || {};
    ((i = (function () {
      var i = 0;
      return function (t, o) {
        var n,
          s = this;
        (s.defaults = {
          accessibility: !0,
          adaptiveHeight: !1,
          appendArrows: e(t),
          appendDots: e(t),
          arrows: !0,
          asNavFor: null,
          prevArrow:
            '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
          nextArrow:
            '<button class="slick-next" aria-label="Next" type="button">Next</button>',
          autoplay: !1,
          autoplaySpeed: 3e3,
          centerMode: !1,
          centerPadding: "50px",
          cssEase: "ease",
          customPaging: function (i, t) {
            return e('<button type="button" />').text(t + 1);
          },
          dots: !1,
          dotsClass: "slick-dots",
          draggable: !0,
          easing: "linear",
          edgeFriction: 0.35,
          fade: !1,
          focusOnSelect: !1,
          focusOnChange: !1,
          infinite: !0,
          initialSlide: 0,
          lazyLoad: "ondemand",
          mobileFirst: !1,
          pauseOnHover: !0,
          pauseOnFocus: !0,
          pauseOnDotsHover: !1,
          respondTo: "window",
          responsive: null,
          rows: 1,
          rtl: !1,
          slide: "",
          slidesPerRow: 1,
          slidesToShow: 1,
          slidesToScroll: 1,
          speed: 500,
          swipe: !0,
          swipeToSlide: !1,
          touchMove: !0,
          touchThreshold: 5,
          useCSS: !0,
          useTransform: !0,
          variableWidth: !1,
          vertical: !1,
          verticalSwiping: !1,
          waitForAnimate: !0,
          zIndex: 1e3,
        }),
          (s.initials = {
            animating: !1,
            dragging: !1,
            autoPlayTimer: null,
            currentDirection: 0,
            currentLeft: null,
            currentSlide: 0,
            direction: 1,
            $dots: null,
            listWidth: null,
            listHeight: null,
            loadIndex: 0,
            $nextArrow: null,
            $prevArrow: null,
            scrolling: !1,
            slideCount: null,
            slideWidth: null,
            $slideTrack: null,
            $slides: null,
            sliding: !1,
            slideOffset: 0,
            swipeLeft: null,
            swiping: !1,
            $list: null,
            touchObject: {},
            transformsEnabled: !1,
            unslicked: !1,
          }),
          e.extend(s, s.initials),
          (s.activeBreakpoint = null),
          (s.animType = null),
          (s.animProp = null),
          (s.breakpoints = []),
          (s.breakpointSettings = []),
          (s.cssTransitions = !1),
          (s.focussed = !1),
          (s.interrupted = !1),
          (s.hidden = "hidden"),
          (s.paused = !0),
          (s.positionProp = null),
          (s.respondTo = null),
          (s.rowCount = 1),
          (s.shouldClick = !0),
          (s.$slider = e(t)),
          (s.$slidesCache = null),
          (s.transformType = null),
          (s.transitionType = null),
          (s.visibilityChange = "visibilitychange"),
          (s.windowWidth = 0),
          (s.windowTimer = null),
          (n = e(t).data("slick") || {}),
          (s.options = e.extend({}, s.defaults, o, n)),
          (s.currentSlide = s.options.initialSlide),
          (s.originalSettings = s.options),
          void 0 !== document.mozHidden
            ? ((s.hidden = "mozHidden"),
              (s.visibilityChange = "mozvisibilitychange"))
            : void 0 !== document.webkitHidden &&
              ((s.hidden = "webkitHidden"),
              (s.visibilityChange = "webkitvisibilitychange")),
          (s.autoPlay = e.proxy(s.autoPlay, s)),
          (s.autoPlayClear = e.proxy(s.autoPlayClear, s)),
          (s.autoPlayIterator = e.proxy(s.autoPlayIterator, s)),
          (s.changeSlide = e.proxy(s.changeSlide, s)),
          (s.clickHandler = e.proxy(s.clickHandler, s)),
          (s.selectHandler = e.proxy(s.selectHandler, s)),
          (s.setPosition = e.proxy(s.setPosition, s)),
          (s.swipeHandler = e.proxy(s.swipeHandler, s)),
          (s.dragHandler = e.proxy(s.dragHandler, s)),
          (s.keyHandler = e.proxy(s.keyHandler, s)),
          (s.instanceUid = i++),
          (s.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
          s.registerBreakpoints(),
          s.init(!0);
      };
    })()).prototype.activateADA = function () {
      this.$slideTrack
        .find(".slick-active")
        .attr({ "aria-hidden": "false" })
        .find("a, input, button, select")
        .attr({ tabindex: "0" });
    }),
      (i.prototype.addSlide = i.prototype.slickAdd =
        function (i, t, o) {
          var n = this;
          if ("boolean" == typeof t) (o = t), (t = null);
          else if (t < 0 || t >= n.slideCount) return !1;
          n.unload(),
            "number" == typeof t
              ? 0 === t && 0 === n.$slides.length
                ? e(i).appendTo(n.$slideTrack)
                : o
                ? e(i).insertBefore(n.$slides.eq(t))
                : e(i).insertAfter(n.$slides.eq(t))
              : !0 === o
              ? e(i).prependTo(n.$slideTrack)
              : e(i).appendTo(n.$slideTrack),
            (n.$slides = n.$slideTrack.children(this.options.slide)),
            n.$slideTrack.children(this.options.slide).detach(),
            n.$slideTrack.append(n.$slides),
            n.$slides.each(function (i, t) {
              e(t).attr("data-slick-index", i);
            }),
            (n.$slidesCache = n.$slides),
            n.reinit();
        }),
      (i.prototype.animateHeight = function () {
        var e = this;
        if (
          1 === e.options.slidesToShow &&
          !0 === e.options.adaptiveHeight &&
          !1 === e.options.vertical
        ) {
          var i = e.$slides.eq(e.currentSlide).outerHeight(!0);
          e.$list.animate({ height: i }, e.options.speed);
        }
      }),
      (i.prototype.animateSlide = function (i, t) {
        var o = {},
          n = this;
        n.animateHeight(),
          !0 === n.options.rtl && !1 === n.options.vertical && (i = -i),
          !1 === n.transformsEnabled
            ? !1 === n.options.vertical
              ? n.$slideTrack.animate(
                  { left: i },
                  n.options.speed,
                  n.options.easing,
                  t
                )
              : n.$slideTrack.animate(
                  { top: i },
                  n.options.speed,
                  n.options.easing,
                  t
                )
            : !1 === n.cssTransitions
            ? (!0 === n.options.rtl && (n.currentLeft = -n.currentLeft),
              e({ animStart: n.currentLeft }).animate(
                { animStart: i },
                {
                  duration: n.options.speed,
                  easing: n.options.easing,
                  step: function (e) {
                    (e = Math.ceil(e)),
                      !1 === n.options.vertical
                        ? ((o[n.animType] = "translate(" + e + "px, 0px)"),
                          n.$slideTrack.css(o))
                        : ((o[n.animType] = "translate(0px," + e + "px)"),
                          n.$slideTrack.css(o));
                  },
                  complete: function () {
                    t && t.call();
                  },
                }
              ))
            : (n.applyTransition(),
              (i = Math.ceil(i)),
              !1 === n.options.vertical
                ? (o[n.animType] = "translate3d(" + i + "px, 0px, 0px)")
                : (o[n.animType] = "translate3d(0px," + i + "px, 0px)"),
              n.$slideTrack.css(o),
              t &&
                setTimeout(function () {
                  n.disableTransition(), t.call();
                }, n.options.speed));
      }),
      (i.prototype.getNavTarget = function () {
        var i = this,
          t = i.options.asNavFor;
        return t && null !== t && (t = e(t).not(i.$slider)), t;
      }),
      (i.prototype.asNavFor = function (i) {
        var t = this.getNavTarget();
        null !== t &&
          "object" == typeof t &&
          t.each(function () {
            var t = e(this).slick("getSlick");
            t.unslicked || t.slideHandler(i, !0);
          });
      }),
      (i.prototype.applyTransition = function (e) {
        var i = this,
          t = {};
        !1 === i.options.fade
          ? (t[i.transitionType] =
              i.transformType +
              " " +
              i.options.speed +
              "ms " +
              i.options.cssEase)
          : (t[i.transitionType] =
              "opacity " + i.options.speed + "ms " + i.options.cssEase),
          !1 === i.options.fade ? i.$slideTrack.css(t) : i.$slides.eq(e).css(t);
      }),
      (i.prototype.autoPlay = function () {
        var e = this;
        e.autoPlayClear(),
          e.slideCount > e.options.slidesToShow &&
            (e.autoPlayTimer = setInterval(
              e.autoPlayIterator,
              e.options.autoplaySpeed
            ));
      }),
      (i.prototype.autoPlayClear = function () {
        var e = this;
        e.autoPlayTimer && clearInterval(e.autoPlayTimer);
      }),
      (i.prototype.autoPlayIterator = function () {
        var e = this,
          i = e.currentSlide + e.options.slidesToScroll;
        e.paused ||
          e.interrupted ||
          e.focussed ||
          (!1 === e.options.infinite &&
            (1 === e.direction && e.currentSlide + 1 === e.slideCount - 1
              ? (e.direction = 0)
              : 0 === e.direction &&
                ((i = e.currentSlide - e.options.slidesToScroll),
                e.currentSlide - 1 == 0 && (e.direction = 1))),
          e.slideHandler(i));
      }),
      (i.prototype.buildArrows = function () {
        var i = this;
        !0 === i.options.arrows &&
          ((i.$prevArrow = e(i.options.prevArrow).addClass("slick-arrow")),
          (i.$nextArrow = e(i.options.nextArrow).addClass("slick-arrow")),
          i.slideCount > i.options.slidesToShow
            ? (i.$prevArrow
                .removeClass("slick-hidden")
                .removeAttr("aria-hidden tabindex"),
              i.$nextArrow
                .removeClass("slick-hidden")
                .removeAttr("aria-hidden tabindex"),
              i.htmlExpr.test(i.options.prevArrow) &&
                i.$prevArrow.prependTo(i.options.appendArrows),
              i.htmlExpr.test(i.options.nextArrow) &&
                i.$nextArrow.appendTo(i.options.appendArrows),
              !0 !== i.options.infinite &&
                i.$prevArrow
                  .addClass("slick-disabled")
                  .attr("aria-disabled", "true"))
            : i.$prevArrow
                .add(i.$nextArrow)
                .addClass("slick-hidden")
                .attr({ "aria-disabled": "true", tabindex: "-1" }));
      }),
      (i.prototype.buildDots = function () {
        var i,
          t,
          o = this;
        if (!0 === o.options.dots) {
          for (
            o.$slider.addClass("slick-dotted"),
              t = e("<ul />").addClass(o.options.dotsClass),
              i = 0;
            i <= o.getDotCount();
            i += 1
          )
            t.append(
              e("<li />").append(o.options.customPaging.call(this, o, i))
            );
          (o.$dots = t.appendTo(o.options.appendDots)),
            o.$dots.find("li").first().addClass("slick-active");
        }
      }),
      (i.prototype.buildOut = function () {
        var i = this;
        (i.$slides = i.$slider
          .children(i.options.slide + ":not(.slick-cloned)")
          .addClass("slick-slide")),
          (i.slideCount = i.$slides.length),
          i.$slides.each(function (i, t) {
            e(t)
              .attr("data-slick-index", i)
              .data("originalStyling", e(t).attr("style") || "");
          }),
          i.$slider.addClass("slick-slider"),
          (i.$slideTrack =
            0 === i.slideCount
              ? e('<div class="slick-track"/>').appendTo(i.$slider)
              : i.$slides.wrapAll('<div class="slick-track"/>').parent()),
          (i.$list = i.$slideTrack.wrap('<div class="slick-list"/>').parent()),
          i.$slideTrack.css("opacity", 0),
          (!0 !== i.options.centerMode && !0 !== i.options.swipeToSlide) ||
            (i.options.slidesToScroll = 1),
          e("img[data-lazy]", i.$slider).not("[src]").addClass("slick-loading"),
          i.setupInfinite(),
          i.buildArrows(),
          i.buildDots(),
          i.updateDots(),
          i.setSlideClasses(
            "number" == typeof i.currentSlide ? i.currentSlide : 0
          ),
          !0 === i.options.draggable && i.$list.addClass("draggable");
      }),
      (i.prototype.buildRows = function () {
        var e,
          i,
          t,
          o,
          n,
          s,
          a,
          r = this;
        if (
          ((o = document.createDocumentFragment()),
          (s = r.$slider.children()),
          r.options.rows > 1)
        ) {
          for (
            a = r.options.slidesPerRow * r.options.rows,
              n = Math.ceil(s.length / a),
              e = 0;
            e < n;
            e++
          ) {
            var l = document.createElement("div");
            for (i = 0; i < r.options.rows; i++) {
              var d = document.createElement("div");
              for (t = 0; t < r.options.slidesPerRow; t++) {
                var c = e * a + (i * r.options.slidesPerRow + t);
                s.get(c) && d.appendChild(s.get(c));
              }
              l.appendChild(d);
            }
            o.appendChild(l);
          }
          r.$slider.empty().append(o),
            r.$slider
              .children()
              .children()
              .children()
              .css({
                width: 100 / r.options.slidesPerRow + "%",
                display: "inline-block",
              });
        }
      }),
      (i.prototype.checkResponsive = function (i, t) {
        var o,
          n,
          s,
          a = this,
          r = !1,
          l = a.$slider.width(),
          d = window.innerWidth || e(window).width();
        if (
          ("window" === a.respondTo
            ? (s = d)
            : "slider" === a.respondTo
            ? (s = l)
            : "min" === a.respondTo && (s = Math.min(d, l)),
          a.options.responsive &&
            a.options.responsive.length &&
            null !== a.options.responsive)
        ) {
          for (o in ((n = null), a.breakpoints))
            a.breakpoints.hasOwnProperty(o) &&
              (!1 === a.originalSettings.mobileFirst
                ? s < a.breakpoints[o] && (n = a.breakpoints[o])
                : s > a.breakpoints[o] && (n = a.breakpoints[o]));
          null !== n
            ? null !== a.activeBreakpoint
              ? (n !== a.activeBreakpoint || t) &&
                ((a.activeBreakpoint = n),
                "unslick" === a.breakpointSettings[n]
                  ? a.unslick(n)
                  : ((a.options = e.extend(
                      {},
                      a.originalSettings,
                      a.breakpointSettings[n]
                    )),
                    !0 === i && (a.currentSlide = a.options.initialSlide),
                    a.refresh(i)),
                (r = n))
              : ((a.activeBreakpoint = n),
                "unslick" === a.breakpointSettings[n]
                  ? a.unslick(n)
                  : ((a.options = e.extend(
                      {},
                      a.originalSettings,
                      a.breakpointSettings[n]
                    )),
                    !0 === i && (a.currentSlide = a.options.initialSlide),
                    a.refresh(i)),
                (r = n))
            : null !== a.activeBreakpoint &&
              ((a.activeBreakpoint = null),
              (a.options = a.originalSettings),
              !0 === i && (a.currentSlide = a.options.initialSlide),
              a.refresh(i),
              (r = n)),
            i || !1 === r || a.$slider.trigger("breakpoint", [a, r]);
        }
      }),
      (i.prototype.changeSlide = function (i, t) {
        var o,
          n,
          s,
          a = this,
          r = e(i.currentTarget);
        switch (
          (r.is("a") && i.preventDefault(),
          r.is("li") || (r = r.closest("li")),
          (o = (s = a.slideCount % a.options.slidesToScroll != 0)
            ? 0
            : (a.slideCount - a.currentSlide) % a.options.slidesToScroll),
          i.data.message)
        ) {
          case "previous":
            (n =
              0 === o ? a.options.slidesToScroll : a.options.slidesToShow - o),
              a.slideCount > a.options.slidesToShow &&
                a.slideHandler(a.currentSlide - n, !1, t);
            break;
          case "next":
            (n = 0 === o ? a.options.slidesToScroll : o),
              a.slideCount > a.options.slidesToShow &&
                a.slideHandler(a.currentSlide + n, !1, t);
            break;
          case "index":
            var l =
              0 === i.data.index
                ? 0
                : i.data.index || r.index() * a.options.slidesToScroll;
            a.slideHandler(a.checkNavigable(l), !1, t),
              r.children().trigger("focus");
            break;
          default:
            return;
        }
      }),
      (i.prototype.checkNavigable = function (e) {
        var i, t;
        if (((t = 0), e > (i = this.getNavigableIndexes())[i.length - 1]))
          e = i[i.length - 1];
        else
          for (var o in i) {
            if (e < i[o]) {
              e = t;
              break;
            }
            t = i[o];
          }
        return e;
      }),
      (i.prototype.cleanUpEvents = function () {
        var i = this;
        i.options.dots &&
          null !== i.$dots &&
          (e("li", i.$dots)
            .off("click.slick", i.changeSlide)
            .off("mouseenter.slick", e.proxy(i.interrupt, i, !0))
            .off("mouseleave.slick", e.proxy(i.interrupt, i, !1)),
          !0 === i.options.accessibility &&
            i.$dots.off("keydown.slick", i.keyHandler)),
          i.$slider.off("focus.slick blur.slick"),
          !0 === i.options.arrows &&
            i.slideCount > i.options.slidesToShow &&
            (i.$prevArrow && i.$prevArrow.off("click.slick", i.changeSlide),
            i.$nextArrow && i.$nextArrow.off("click.slick", i.changeSlide),
            !0 === i.options.accessibility &&
              (i.$prevArrow && i.$prevArrow.off("keydown.slick", i.keyHandler),
              i.$nextArrow && i.$nextArrow.off("keydown.slick", i.keyHandler))),
          i.$list.off("touchstart.slick mousedown.slick", i.swipeHandler),
          i.$list.off("touchmove.slick mousemove.slick", i.swipeHandler),
          i.$list.off("touchend.slick mouseup.slick", i.swipeHandler),
          i.$list.off("touchcancel.slick mouseleave.slick", i.swipeHandler),
          i.$list.off("click.slick", i.clickHandler),
          e(document).off(i.visibilityChange, i.visibility),
          i.cleanUpSlideEvents(),
          !0 === i.options.accessibility &&
            i.$list.off("keydown.slick", i.keyHandler),
          !0 === i.options.focusOnSelect &&
            e(i.$slideTrack).children().off("click.slick", i.selectHandler),
          e(window).off(
            "orientationchange.slick.slick-" + i.instanceUid,
            i.orientationChange
          ),
          e(window).off("resize.slick.slick-" + i.instanceUid, i.resize),
          e("[draggable!=true]", i.$slideTrack).off(
            "dragstart",
            i.preventDefault
          ),
          e(window).off("load.slick.slick-" + i.instanceUid, i.setPosition);
      }),
      (i.prototype.cleanUpSlideEvents = function () {
        var i = this;
        i.$list.off("mouseenter.slick", e.proxy(i.interrupt, i, !0)),
          i.$list.off("mouseleave.slick", e.proxy(i.interrupt, i, !1));
      }),
      (i.prototype.cleanUpRows = function () {
        var e,
          i = this;
        i.options.rows > 1 &&
          ((e = i.$slides.children().children()).removeAttr("style"),
          i.$slider.empty().append(e));
      }),
      (i.prototype.clickHandler = function (e) {
        !1 === this.shouldClick &&
          (e.stopImmediatePropagation(),
          e.stopPropagation(),
          e.preventDefault());
      }),
      (i.prototype.destroy = function (i) {
        var t = this;
        t.autoPlayClear(),
          (t.touchObject = {}),
          t.cleanUpEvents(),
          e(".slick-cloned", t.$slider).detach(),
          t.$dots && t.$dots.remove(),
          t.$prevArrow &&
            t.$prevArrow.length &&
            (t.$prevArrow
              .removeClass("slick-disabled slick-arrow slick-hidden")
              .removeAttr("aria-hidden aria-disabled tabindex")
              .css("display", ""),
            t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()),
          t.$nextArrow &&
            t.$nextArrow.length &&
            (t.$nextArrow
              .removeClass("slick-disabled slick-arrow slick-hidden")
              .removeAttr("aria-hidden aria-disabled tabindex")
              .css("display", ""),
            t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()),
          t.$slides &&
            (t.$slides
              .removeClass(
                "slick-slide slick-active slick-center slick-visible slick-current"
              )
              .removeAttr("aria-hidden")
              .removeAttr("data-slick-index")
              .each(function () {
                e(this).attr("style", e(this).data("originalStyling"));
              }),
            t.$slideTrack.children(this.options.slide).detach(),
            t.$slideTrack.detach(),
            t.$list.detach(),
            t.$slider.append(t.$slides)),
          t.cleanUpRows(),
          t.$slider.removeClass("slick-slider"),
          t.$slider.removeClass("slick-initialized"),
          t.$slider.removeClass("slick-dotted"),
          (t.unslicked = !0),
          i || t.$slider.trigger("destroy", [t]);
      }),
      (i.prototype.disableTransition = function (e) {
        var i = this,
          t = {};
        (t[i.transitionType] = ""),
          !1 === i.options.fade ? i.$slideTrack.css(t) : i.$slides.eq(e).css(t);
      }),
      (i.prototype.fadeSlide = function (e, i) {
        var t = this;
        !1 === t.cssTransitions
          ? (t.$slides.eq(e).css({ zIndex: t.options.zIndex }),
            t.$slides
              .eq(e)
              .animate({ opacity: 1 }, t.options.speed, t.options.easing, i))
          : (t.applyTransition(e),
            t.$slides.eq(e).css({ opacity: 1, zIndex: t.options.zIndex }),
            i &&
              setTimeout(function () {
                t.disableTransition(e), i.call();
              }, t.options.speed));
      }),
      (i.prototype.fadeSlideOut = function (e) {
        var i = this;
        !1 === i.cssTransitions
          ? i.$slides
              .eq(e)
              .animate(
                { opacity: 0, zIndex: i.options.zIndex - 2 },
                i.options.speed,
                i.options.easing
              )
          : (i.applyTransition(e),
            i.$slides.eq(e).css({ opacity: 0, zIndex: i.options.zIndex - 2 }));
      }),
      (i.prototype.filterSlides = i.prototype.slickFilter =
        function (e) {
          var i = this;
          null !== e &&
            ((i.$slidesCache = i.$slides),
            i.unload(),
            i.$slideTrack.children(this.options.slide).detach(),
            i.$slidesCache.filter(e).appendTo(i.$slideTrack),
            i.reinit());
        }),
      (i.prototype.focusHandler = function () {
        var i = this;
        i.$slider
          .off("focus.slick blur.slick")
          .on("focus.slick blur.slick", "*", function (t) {
            t.stopImmediatePropagation();
            var o = e(this);
            setTimeout(function () {
              i.options.pauseOnFocus &&
                ((i.focussed = o.is(":focus")), i.autoPlay());
            }, 0);
          });
      }),
      (i.prototype.getCurrent = i.prototype.slickCurrentSlide =
        function () {
          return this.currentSlide;
        }),
      (i.prototype.getDotCount = function () {
        var e = this,
          i = 0,
          t = 0,
          o = 0;
        if (!0 === e.options.infinite)
          if (e.slideCount <= e.options.slidesToShow) ++o;
          else
            for (; i < e.slideCount; )
              ++o,
                (i = t + e.options.slidesToScroll),
                (t +=
                  e.options.slidesToScroll <= e.options.slidesToShow
                    ? e.options.slidesToScroll
                    : e.options.slidesToShow);
        else if (!0 === e.options.centerMode) o = e.slideCount;
        else if (e.options.asNavFor)
          for (; i < e.slideCount; )
            ++o,
              (i = t + e.options.slidesToScroll),
              (t +=
                e.options.slidesToScroll <= e.options.slidesToShow
                  ? e.options.slidesToScroll
                  : e.options.slidesToShow);
        else
          o =
            1 +
            Math.ceil(
              (e.slideCount - e.options.slidesToShow) / e.options.slidesToScroll
            );
        return o - 1;
      }),
      (i.prototype.getLeft = function (e) {
        var i,
          t,
          o,
          n,
          s = this,
          a = 0;
        return (
          (s.slideOffset = 0),
          (t = s.$slides.first().outerHeight(!0)),
          !0 === s.options.infinite
            ? (s.slideCount > s.options.slidesToShow &&
                ((s.slideOffset = s.slideWidth * s.options.slidesToShow * -1),
                (n = -1),
                !0 === s.options.vertical &&
                  !0 === s.options.centerMode &&
                  (2 === s.options.slidesToShow
                    ? (n = -1.5)
                    : 1 === s.options.slidesToShow && (n = -2)),
                (a = t * s.options.slidesToShow * n)),
              s.slideCount % s.options.slidesToScroll != 0 &&
                e + s.options.slidesToScroll > s.slideCount &&
                s.slideCount > s.options.slidesToShow &&
                (e > s.slideCount
                  ? ((s.slideOffset =
                      (s.options.slidesToShow - (e - s.slideCount)) *
                      s.slideWidth *
                      -1),
                    (a =
                      (s.options.slidesToShow - (e - s.slideCount)) * t * -1))
                  : ((s.slideOffset =
                      (s.slideCount % s.options.slidesToScroll) *
                      s.slideWidth *
                      -1),
                    (a = (s.slideCount % s.options.slidesToScroll) * t * -1))))
            : e + s.options.slidesToShow > s.slideCount &&
              ((s.slideOffset =
                (e + s.options.slidesToShow - s.slideCount) * s.slideWidth),
              (a = (e + s.options.slidesToShow - s.slideCount) * t)),
          s.slideCount <= s.options.slidesToShow &&
            ((s.slideOffset = 0), (a = 0)),
          !0 === s.options.centerMode && s.slideCount <= s.options.slidesToShow
            ? (s.slideOffset =
                (s.slideWidth * Math.floor(s.options.slidesToShow)) / 2 -
                (s.slideWidth * s.slideCount) / 2)
            : !0 === s.options.centerMode && !0 === s.options.infinite
            ? (s.slideOffset +=
                s.slideWidth * Math.floor(s.options.slidesToShow / 2) -
                s.slideWidth)
            : !0 === s.options.centerMode &&
              ((s.slideOffset = 0),
              (s.slideOffset +=
                s.slideWidth * Math.floor(s.options.slidesToShow / 2))),
          (i =
            !1 === s.options.vertical
              ? e * s.slideWidth * -1 + s.slideOffset
              : e * t * -1 + a),
          !0 === s.options.variableWidth &&
            ((o =
              s.slideCount <= s.options.slidesToShow ||
              !1 === s.options.infinite
                ? s.$slideTrack.children(".slick-slide").eq(e)
                : s.$slideTrack
                    .children(".slick-slide")
                    .eq(e + s.options.slidesToShow)),
            (i =
              !0 === s.options.rtl
                ? o[0]
                  ? -1 * (s.$slideTrack.width() - o[0].offsetLeft - o.width())
                  : 0
                : o[0]
                ? -1 * o[0].offsetLeft
                : 0),
            !0 === s.options.centerMode &&
              ((o =
                s.slideCount <= s.options.slidesToShow ||
                !1 === s.options.infinite
                  ? s.$slideTrack.children(".slick-slide").eq(e)
                  : s.$slideTrack
                      .children(".slick-slide")
                      .eq(e + s.options.slidesToShow + 1)),
              (i =
                !0 === s.options.rtl
                  ? o[0]
                    ? -1 * (s.$slideTrack.width() - o[0].offsetLeft - o.width())
                    : 0
                  : o[0]
                  ? -1 * o[0].offsetLeft
                  : 0),
              (i += (s.$list.width() - o.outerWidth()) / 2))),
          i
        );
      }),
      (i.prototype.getOption = i.prototype.slickGetOption =
        function (e) {
          return this.options[e];
        }),
      (i.prototype.getNavigableIndexes = function () {
        var e,
          i = this,
          t = 0,
          o = 0,
          n = [];
        for (
          !1 === i.options.infinite
            ? (e = i.slideCount)
            : ((t = -1 * i.options.slidesToScroll),
              (o = -1 * i.options.slidesToScroll),
              (e = 2 * i.slideCount));
          t < e;

        )
          n.push(t),
            (t = o + i.options.slidesToScroll),
            (o +=
              i.options.slidesToScroll <= i.options.slidesToShow
                ? i.options.slidesToScroll
                : i.options.slidesToShow);
        return n;
      }),
      (i.prototype.getSlick = function () {
        return this;
      }),
      (i.prototype.getSlideCount = function () {
        var i,
          t,
          o = this;
        return (
          (t =
            !0 === o.options.centerMode
              ? o.slideWidth * Math.floor(o.options.slidesToShow / 2)
              : 0),
          !0 === o.options.swipeToSlide
            ? (o.$slideTrack.find(".slick-slide").each(function (n, s) {
                if (s.offsetLeft - t + e(s).outerWidth() / 2 > -1 * o.swipeLeft)
                  return (i = s), !1;
              }),
              Math.abs(e(i).attr("data-slick-index") - o.currentSlide) || 1)
            : o.options.slidesToScroll
        );
      }),
      (i.prototype.goTo = i.prototype.slickGoTo =
        function (e, i) {
          this.changeSlide(
            { data: { message: "index", index: parseInt(e) } },
            i
          );
        }),
      (i.prototype.init = function (i) {
        var t = this;
        e(t.$slider).hasClass("slick-initialized") ||
          (e(t.$slider).addClass("slick-initialized"),
          t.buildRows(),
          t.buildOut(),
          t.setProps(),
          t.startLoad(),
          t.loadSlider(),
          t.initializeEvents(),
          t.updateArrows(),
          t.updateDots(),
          t.checkResponsive(!0),
          t.focusHandler()),
          i && t.$slider.trigger("init", [t]),
          !0 === t.options.accessibility && t.initADA(),
          t.options.autoplay && ((t.paused = !1), t.autoPlay());
      }),
      (i.prototype.initADA = function () {
        var i = this,
          t = Math.ceil(i.slideCount / i.options.slidesToShow),
          o = i.getNavigableIndexes().filter(function (e) {
            return e >= 0 && e < i.slideCount;
          });
        i.$slides
          .add(i.$slideTrack.find(".slick-cloned"))
          .attr({ "aria-hidden": "true", tabindex: "-1" })
          .find("a, input, button, select")
          .attr({ tabindex: "-1" }),
          null !== i.$dots &&
            (i.$slides
              .not(i.$slideTrack.find(".slick-cloned"))
              .each(function (t) {
                var n = o.indexOf(t);
                e(this).attr({
                  role: "tabpanel",
                  id: "slick-slide" + i.instanceUid + t,
                  tabindex: -1,
                }),
                  -1 !== n &&
                    e(this).attr({
                      "aria-describedby":
                        "slick-slide-control" + i.instanceUid + n,
                    });
              }),
            i.$dots
              .attr("role", "tablist")
              .find("li")
              .each(function (n) {
                var s = o[n];
                e(this).attr({ role: "presentation" }),
                  e(this)
                    .find("button")
                    .first()
                    .attr({
                      role: "tab",
                      id: "slick-slide-control" + i.instanceUid + n,
                      "aria-controls": "slick-slide" + i.instanceUid + s,
                      "aria-label": n + 1 + " of " + t,
                      "aria-selected": null,
                      tabindex: "-1",
                    });
              })
              .eq(i.currentSlide)
              .find("button")
              .attr({ "aria-selected": "true", tabindex: "0" })
              .end());
        for (var n = i.currentSlide, s = n + i.options.slidesToShow; n < s; n++)
          i.$slides.eq(n).attr("tabindex", 0);
        i.activateADA();
      }),
      (i.prototype.initArrowEvents = function () {
        var e = this;
        !0 === e.options.arrows &&
          e.slideCount > e.options.slidesToShow &&
          (e.$prevArrow
            .off("click.slick")
            .on("click.slick", { message: "previous" }, e.changeSlide),
          e.$nextArrow
            .off("click.slick")
            .on("click.slick", { message: "next" }, e.changeSlide),
          !0 === e.options.accessibility &&
            (e.$prevArrow.on("keydown.slick", e.keyHandler),
            e.$nextArrow.on("keydown.slick", e.keyHandler)));
      }),
      (i.prototype.initDotEvents = function () {
        var i = this;
        !0 === i.options.dots &&
          (e("li", i.$dots).on(
            "click.slick",
            { message: "index" },
            i.changeSlide
          ),
          !0 === i.options.accessibility &&
            i.$dots.on("keydown.slick", i.keyHandler)),
          !0 === i.options.dots &&
            !0 === i.options.pauseOnDotsHover &&
            e("li", i.$dots)
              .on("mouseenter.slick", e.proxy(i.interrupt, i, !0))
              .on("mouseleave.slick", e.proxy(i.interrupt, i, !1));
      }),
      (i.prototype.initSlideEvents = function () {
        var i = this;
        i.options.pauseOnHover &&
          (i.$list.on("mouseenter.slick", e.proxy(i.interrupt, i, !0)),
          i.$list.on("mouseleave.slick", e.proxy(i.interrupt, i, !1)));
      }),
      (i.prototype.initializeEvents = function () {
        var i = this;
        i.initArrowEvents(),
          i.initDotEvents(),
          i.initSlideEvents(),
          i.$list.on(
            "touchstart.slick mousedown.slick",
            { action: "start" },
            i.swipeHandler
          ),
          i.$list.on(
            "touchmove.slick mousemove.slick",
            { action: "move" },
            i.swipeHandler
          ),
          i.$list.on(
            "touchend.slick mouseup.slick",
            { action: "end" },
            i.swipeHandler
          ),
          i.$list.on(
            "touchcancel.slick mouseleave.slick",
            { action: "end" },
            i.swipeHandler
          ),
          i.$list.on("click.slick", i.clickHandler),
          e(document).on(i.visibilityChange, e.proxy(i.visibility, i)),
          !0 === i.options.accessibility &&
            i.$list.on("keydown.slick", i.keyHandler),
          !0 === i.options.focusOnSelect &&
            e(i.$slideTrack).children().on("click.slick", i.selectHandler),
          e(window).on(
            "orientationchange.slick.slick-" + i.instanceUid,
            e.proxy(i.orientationChange, i)
          ),
          e(window).on(
            "resize.slick.slick-" + i.instanceUid,
            e.proxy(i.resize, i)
          ),
          e("[draggable!=true]", i.$slideTrack).on(
            "dragstart",
            i.preventDefault
          ),
          e(window).on("load.slick.slick-" + i.instanceUid, i.setPosition),
          e(i.setPosition);
      }),
      (i.prototype.initUI = function () {
        var e = this;
        !0 === e.options.arrows &&
          e.slideCount > e.options.slidesToShow &&
          (e.$prevArrow.show(), e.$nextArrow.show()),
          !0 === e.options.dots &&
            e.slideCount > e.options.slidesToShow &&
            e.$dots.show();
      }),
      (i.prototype.keyHandler = function (e) {
        var i = this;
        e.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
          (37 === e.keyCode && !0 === i.options.accessibility
            ? i.changeSlide({
                data: { message: !0 === i.options.rtl ? "next" : "previous" },
              })
            : 39 === e.keyCode &&
              !0 === i.options.accessibility &&
              i.changeSlide({
                data: { message: !0 === i.options.rtl ? "previous" : "next" },
              }));
      }),
      (i.prototype.lazyLoad = function () {
        function i(i) {
          e("img[data-lazy]", i).each(function () {
            var i = e(this),
              t = e(this).attr("data-lazy"),
              o = e(this).attr("data-srcset"),
              n = e(this).attr("data-sizes") || s.$slider.attr("data-sizes"),
              a = document.createElement("img");
            (a.onload = function () {
              i.animate({ opacity: 0 }, 100, function () {
                o && (i.attr("srcset", o), n && i.attr("sizes", n)),
                  i.attr("src", t).animate({ opacity: 1 }, 200, function () {
                    i.removeAttr(
                      "data-lazy data-srcset data-sizes"
                    ).removeClass("slick-loading");
                  }),
                  s.$slider.trigger("lazyLoaded", [s, i, t]);
              });
            }),
              (a.onerror = function () {
                i
                  .removeAttr("data-lazy")
                  .removeClass("slick-loading")
                  .addClass("slick-lazyload-error"),
                  s.$slider.trigger("lazyLoadError", [s, i, t]);
              }),
              (a.src = t);
          });
        }
        var t,
          o,
          n,
          s = this;
        if (
          (!0 === s.options.centerMode
            ? !0 === s.options.infinite
              ? (n =
                  (o = s.currentSlide + (s.options.slidesToShow / 2 + 1)) +
                  s.options.slidesToShow +
                  2)
              : ((o = Math.max(
                  0,
                  s.currentSlide - (s.options.slidesToShow / 2 + 1)
                )),
                (n = s.options.slidesToShow / 2 + 1 + 2 + s.currentSlide))
            : ((o = s.options.infinite
                ? s.options.slidesToShow + s.currentSlide
                : s.currentSlide),
              (n = Math.ceil(o + s.options.slidesToShow)),
              !0 === s.options.fade &&
                (o > 0 && o--, n <= s.slideCount && n++)),
          (t = s.$slider.find(".slick-slide").slice(o, n)),
          "anticipated" === s.options.lazyLoad)
        )
          for (
            var a = o - 1, r = n, l = s.$slider.find(".slick-slide"), d = 0;
            d < s.options.slidesToScroll;
            d++
          )
            a < 0 && (a = s.slideCount - 1),
              (t = (t = t.add(l.eq(a))).add(l.eq(r))),
              a--,
              r++;
        i(t),
          s.slideCount <= s.options.slidesToShow
            ? i(s.$slider.find(".slick-slide"))
            : s.currentSlide >= s.slideCount - s.options.slidesToShow
            ? i(
                s.$slider.find(".slick-cloned").slice(0, s.options.slidesToShow)
              )
            : 0 === s.currentSlide &&
              i(
                s.$slider
                  .find(".slick-cloned")
                  .slice(-1 * s.options.slidesToShow)
              );
      }),
      (i.prototype.loadSlider = function () {
        var e = this;
        e.setPosition(),
          e.$slideTrack.css({ opacity: 1 }),
          e.$slider.removeClass("slick-loading"),
          e.initUI(),
          "progressive" === e.options.lazyLoad && e.progressiveLazyLoad();
      }),
      (i.prototype.next = i.prototype.slickNext =
        function () {
          this.changeSlide({ data: { message: "next" } });
        }),
      (i.prototype.orientationChange = function () {
        var e = this;
        e.checkResponsive(), e.setPosition();
      }),
      (i.prototype.pause = i.prototype.slickPause =
        function () {
          var e = this;
          e.autoPlayClear(), (e.paused = !0);
        }),
      (i.prototype.play = i.prototype.slickPlay =
        function () {
          var e = this;
          e.autoPlay(),
            (e.options.autoplay = !0),
            (e.paused = !1),
            (e.focussed = !1),
            (e.interrupted = !1);
        }),
      (i.prototype.postSlide = function (i) {
        var t = this;
        t.unslicked ||
          (t.$slider.trigger("afterChange", [t, i]),
          (t.animating = !1),
          t.slideCount > t.options.slidesToShow && t.setPosition(),
          (t.swipeLeft = null),
          t.options.autoplay && t.autoPlay(),
          !0 === t.options.accessibility &&
            (t.initADA(),
            t.options.focusOnChange &&
              e(t.$slides.get(t.currentSlide)).attr("tabindex", 0).focus()));
      }),
      (i.prototype.prev = i.prototype.slickPrev =
        function () {
          this.changeSlide({ data: { message: "previous" } });
        }),
      (i.prototype.preventDefault = function (e) {
        e.preventDefault();
      }),
      (i.prototype.progressiveLazyLoad = function (i) {
        i = i || 1;
        var t,
          o,
          n,
          s,
          a,
          r = this,
          l = e("img[data-lazy]", r.$slider);
        l.length
          ? ((t = l.first()),
            (o = t.attr("data-lazy")),
            (n = t.attr("data-srcset")),
            (s = t.attr("data-sizes") || r.$slider.attr("data-sizes")),
            ((a = document.createElement("img")).onload = function () {
              n && (t.attr("srcset", n), s && t.attr("sizes", s)),
                t
                  .attr("src", o)
                  .removeAttr("data-lazy data-srcset data-sizes")
                  .removeClass("slick-loading"),
                !0 === r.options.adaptiveHeight && r.setPosition(),
                r.$slider.trigger("lazyLoaded", [r, t, o]),
                r.progressiveLazyLoad();
            }),
            (a.onerror = function () {
              i < 3
                ? setTimeout(function () {
                    r.progressiveLazyLoad(i + 1);
                  }, 500)
                : (t
                    .removeAttr("data-lazy")
                    .removeClass("slick-loading")
                    .addClass("slick-lazyload-error"),
                  r.$slider.trigger("lazyLoadError", [r, t, o]),
                  r.progressiveLazyLoad());
            }),
            (a.src = o))
          : r.$slider.trigger("allImagesLoaded", [r]);
      }),
      (i.prototype.refresh = function (i) {
        var t,
          o,
          n = this;
        (o = n.slideCount - n.options.slidesToShow),
          !n.options.infinite && n.currentSlide > o && (n.currentSlide = o),
          n.slideCount <= n.options.slidesToShow && (n.currentSlide = 0),
          (t = n.currentSlide),
          n.destroy(!0),
          e.extend(n, n.initials, { currentSlide: t }),
          n.init(),
          i || n.changeSlide({ data: { message: "index", index: t } }, !1);
      }),
      (i.prototype.registerBreakpoints = function () {
        var i,
          t,
          o,
          n = this,
          s = n.options.responsive || null;
        if ("array" === e.type(s) && s.length) {
          for (i in ((n.respondTo = n.options.respondTo || "window"), s))
            if (((o = n.breakpoints.length - 1), s.hasOwnProperty(i))) {
              for (t = s[i].breakpoint; o >= 0; )
                n.breakpoints[o] &&
                  n.breakpoints[o] === t &&
                  n.breakpoints.splice(o, 1),
                  o--;
              n.breakpoints.push(t), (n.breakpointSettings[t] = s[i].settings);
            }
          n.breakpoints.sort(function (e, i) {
            return n.options.mobileFirst ? e - i : i - e;
          });
        }
      }),
      (i.prototype.reinit = function () {
        var i = this;
        (i.$slides = i.$slideTrack
          .children(i.options.slide)
          .addClass("slick-slide")),
          (i.slideCount = i.$slides.length),
          i.currentSlide >= i.slideCount &&
            0 !== i.currentSlide &&
            (i.currentSlide = i.currentSlide - i.options.slidesToScroll),
          i.slideCount <= i.options.slidesToShow && (i.currentSlide = 0),
          i.registerBreakpoints(),
          i.setProps(),
          i.setupInfinite(),
          i.buildArrows(),
          i.updateArrows(),
          i.initArrowEvents(),
          i.buildDots(),
          i.updateDots(),
          i.initDotEvents(),
          i.cleanUpSlideEvents(),
          i.initSlideEvents(),
          i.checkResponsive(!1, !0),
          !0 === i.options.focusOnSelect &&
            e(i.$slideTrack).children().on("click.slick", i.selectHandler),
          i.setSlideClasses(
            "number" == typeof i.currentSlide ? i.currentSlide : 0
          ),
          i.setPosition(),
          i.focusHandler(),
          (i.paused = !i.options.autoplay),
          i.autoPlay(),
          i.$slider.trigger("reInit", [i]);
      }),
      (i.prototype.resize = function () {
        var i = this;
        e(window).width() !== i.windowWidth &&
          (clearTimeout(i.windowDelay),
          (i.windowDelay = window.setTimeout(function () {
            (i.windowWidth = e(window).width()),
              i.checkResponsive(),
              i.unslicked || i.setPosition();
          }, 50)));
      }),
      (i.prototype.removeSlide = i.prototype.slickRemove =
        function (e, i, t) {
          var o = this;
          if (
            ((e =
              "boolean" == typeof e
                ? !0 === (i = e)
                  ? 0
                  : o.slideCount - 1
                : !0 === i
                ? --e
                : e),
            o.slideCount < 1 || e < 0 || e > o.slideCount - 1)
          )
            return !1;
          o.unload(),
            !0 === t
              ? o.$slideTrack.children().remove()
              : o.$slideTrack.children(this.options.slide).eq(e).remove(),
            (o.$slides = o.$slideTrack.children(this.options.slide)),
            o.$slideTrack.children(this.options.slide).detach(),
            o.$slideTrack.append(o.$slides),
            (o.$slidesCache = o.$slides),
            o.reinit();
        }),
      (i.prototype.setCSS = function (e) {
        var i,
          t,
          o = this,
          n = {};
        !0 === o.options.rtl && (e = -e),
          (i = "left" == o.positionProp ? Math.ceil(e) + "px" : "0px"),
          (t = "top" == o.positionProp ? Math.ceil(e) + "px" : "0px"),
          (n[o.positionProp] = e),
          !1 === o.transformsEnabled
            ? o.$slideTrack.css(n)
            : ((n = {}),
              !1 === o.cssTransitions
                ? ((n[o.animType] = "translate(" + i + ", " + t + ")"),
                  o.$slideTrack.css(n))
                : ((n[o.animType] = "translate3d(" + i + ", " + t + ", 0px)"),
                  o.$slideTrack.css(n)));
      }),
      (i.prototype.setDimensions = function () {
        var e = this;
        !1 === e.options.vertical
          ? !0 === e.options.centerMode &&
            e.$list.css({ padding: "0px " + e.options.centerPadding })
          : (e.$list.height(
              e.$slides.first().outerHeight(!0) * e.options.slidesToShow
            ),
            !0 === e.options.centerMode &&
              e.$list.css({ padding: e.options.centerPadding + " 0px" })),
          (e.listWidth = e.$list.width()),
          (e.listHeight = e.$list.height()),
          !1 === e.options.vertical && !1 === e.options.variableWidth
            ? ((e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow)),
              e.$slideTrack.width(
                Math.ceil(
                  e.slideWidth * e.$slideTrack.children(".slick-slide").length
                )
              ))
            : !0 === e.options.variableWidth
            ? e.$slideTrack.width(5e3 * e.slideCount)
            : ((e.slideWidth = Math.ceil(e.listWidth)),
              e.$slideTrack.height(
                Math.ceil(
                  e.$slides.first().outerHeight(!0) *
                    e.$slideTrack.children(".slick-slide").length
                )
              ));
        var i = e.$slides.first().outerWidth(!0) - e.$slides.first().width();
        !1 === e.options.variableWidth &&
          e.$slideTrack.children(".slick-slide").width(e.slideWidth - i);
      }),
      (i.prototype.setFade = function () {
        var i,
          t = this;
        t.$slides.each(function (o, n) {
          (i = t.slideWidth * o * -1),
            !0 === t.options.rtl
              ? e(n).css({
                  position: "relative",
                  right: i,
                  top: 0,
                  zIndex: t.options.zIndex - 2,
                  opacity: 0,
                })
              : e(n).css({
                  position: "relative",
                  left: i,
                  top: 0,
                  zIndex: t.options.zIndex - 2,
                  opacity: 0,
                });
        }),
          t.$slides
            .eq(t.currentSlide)
            .css({ zIndex: t.options.zIndex - 1, opacity: 1 });
      }),
      (i.prototype.setHeight = function () {
        var e = this;
        if (
          1 === e.options.slidesToShow &&
          !0 === e.options.adaptiveHeight &&
          !1 === e.options.vertical
        ) {
          var i = e.$slides.eq(e.currentSlide).outerHeight(!0);
          e.$list.css("height", i);
        }
      }),
      (i.prototype.setOption = i.prototype.slickSetOption =
        function (i, t, o) {
          var n,
            s,
            a,
            r,
            l,
            d = this,
            c = !1;
          if (
            ("object" === e.type(i)
              ? ((a = i), (c = t), (l = "multiple"))
              : "string" === e.type(i) &&
                ((a = i),
                (r = t),
                (c = o),
                "responsive" === i && "array" === e.type(t)
                  ? (l = "responsive")
                  : void 0 !== t && (l = "single")),
            "single" === l)
          )
            d.options[a] = r;
          else if ("multiple" === l)
            e.each(a, function (e, i) {
              d.options[e] = i;
            });
          else if ("responsive" === l)
            for (s in r)
              if ("array" !== e.type(d.options.responsive))
                d.options.responsive = [r[s]];
              else {
                for (n = d.options.responsive.length - 1; n >= 0; )
                  d.options.responsive[n].breakpoint === r[s].breakpoint &&
                    d.options.responsive.splice(n, 1),
                    n--;
                d.options.responsive.push(r[s]);
              }
          c && (d.unload(), d.reinit());
        }),
      (i.prototype.setPosition = function () {
        var e = this;
        e.setDimensions(),
          e.setHeight(),
          !1 === e.options.fade
            ? e.setCSS(e.getLeft(e.currentSlide))
            : e.setFade(),
          e.$slider.trigger("setPosition", [e]);
      }),
      (i.prototype.setProps = function () {
        var e = this,
          i = document.body.style;
        (e.positionProp = !0 === e.options.vertical ? "top" : "left"),
          "top" === e.positionProp
            ? e.$slider.addClass("slick-vertical")
            : e.$slider.removeClass("slick-vertical"),
          (void 0 === i.WebkitTransition &&
            void 0 === i.MozTransition &&
            void 0 === i.msTransition) ||
            (!0 === e.options.useCSS && (e.cssTransitions = !0)),
          e.options.fade &&
            ("number" == typeof e.options.zIndex
              ? e.options.zIndex < 3 && (e.options.zIndex = 3)
              : (e.options.zIndex = e.defaults.zIndex)),
          void 0 !== i.OTransform &&
            ((e.animType = "OTransform"),
            (e.transformType = "-o-transform"),
            (e.transitionType = "OTransition"),
            void 0 === i.perspectiveProperty &&
              void 0 === i.webkitPerspective &&
              (e.animType = !1)),
          void 0 !== i.MozTransform &&
            ((e.animType = "MozTransform"),
            (e.transformType = "-moz-transform"),
            (e.transitionType = "MozTransition"),
            void 0 === i.perspectiveProperty &&
              void 0 === i.MozPerspective &&
              (e.animType = !1)),
          void 0 !== i.webkitTransform &&
            ((e.animType = "webkitTransform"),
            (e.transformType = "-webkit-transform"),
            (e.transitionType = "webkitTransition"),
            void 0 === i.perspectiveProperty &&
              void 0 === i.webkitPerspective &&
              (e.animType = !1)),
          void 0 !== i.msTransform &&
            ((e.animType = "msTransform"),
            (e.transformType = "-ms-transform"),
            (e.transitionType = "msTransition"),
            void 0 === i.msTransform && (e.animType = !1)),
          void 0 !== i.transform &&
            !1 !== e.animType &&
            ((e.animType = "transform"),
            (e.transformType = "transform"),
            (e.transitionType = "transition")),
          (e.transformsEnabled =
            e.options.useTransform && null !== e.animType && !1 !== e.animType);
      }),
      (i.prototype.setSlideClasses = function (e) {
        var i,
          t,
          o,
          n,
          s = this;
        if (
          ((t = s.$slider
            .find(".slick-slide")
            .removeClass("slick-active slick-center slick-current")
            .attr("aria-hidden", "true")),
          s.$slides.eq(e).addClass("slick-current"),
          !0 === s.options.centerMode)
        ) {
          var a = s.options.slidesToShow % 2 == 0 ? 1 : 0;
          (i = Math.floor(s.options.slidesToShow / 2)),
            !0 === s.options.infinite &&
              (e >= i && e <= s.slideCount - 1 - i
                ? s.$slides
                    .slice(e - i + a, e + i + 1)
                    .addClass("slick-active")
                    .attr("aria-hidden", "false")
                : ((o = s.options.slidesToShow + e),
                  t
                    .slice(o - i + 1 + a, o + i + 2)
                    .addClass("slick-active")
                    .attr("aria-hidden", "false")),
              0 === e
                ? t
                    .eq(t.length - 1 - s.options.slidesToShow)
                    .addClass("slick-center")
                : e === s.slideCount - 1 &&
                  t.eq(s.options.slidesToShow).addClass("slick-center")),
            s.$slides.eq(e).addClass("slick-center");
        } else
          e >= 0 && e <= s.slideCount - s.options.slidesToShow
            ? s.$slides
                .slice(e, e + s.options.slidesToShow)
                .addClass("slick-active")
                .attr("aria-hidden", "false")
            : t.length <= s.options.slidesToShow
            ? t.addClass("slick-active").attr("aria-hidden", "false")
            : ((n = s.slideCount % s.options.slidesToShow),
              (o = !0 === s.options.infinite ? s.options.slidesToShow + e : e),
              s.options.slidesToShow == s.options.slidesToScroll &&
              s.slideCount - e < s.options.slidesToShow
                ? t
                    .slice(o - (s.options.slidesToShow - n), o + n)
                    .addClass("slick-active")
                    .attr("aria-hidden", "false")
                : t
                    .slice(o, o + s.options.slidesToShow)
                    .addClass("slick-active")
                    .attr("aria-hidden", "false"));
        ("ondemand" !== s.options.lazyLoad &&
          "anticipated" !== s.options.lazyLoad) ||
          s.lazyLoad();
      }),
      (i.prototype.setupInfinite = function () {
        var i,
          t,
          o,
          n = this;
        if (
          (!0 === n.options.fade && (n.options.centerMode = !1),
          !0 === n.options.infinite &&
            !1 === n.options.fade &&
            ((t = null), n.slideCount > n.options.slidesToShow))
        ) {
          for (
            o =
              !0 === n.options.centerMode
                ? n.options.slidesToShow + 1
                : n.options.slidesToShow,
              i = n.slideCount;
            i > n.slideCount - o;
            i -= 1
          )
            (t = i - 1),
              e(n.$slides[t])
                .clone(!0)
                .attr("id", "")
                .attr("data-slick-index", t - n.slideCount)
                .prependTo(n.$slideTrack)
                .addClass("slick-cloned");
          for (i = 0; i < o + n.slideCount; i += 1)
            (t = i),
              e(n.$slides[t])
                .clone(!0)
                .attr("id", "")
                .attr("data-slick-index", t + n.slideCount)
                .appendTo(n.$slideTrack)
                .addClass("slick-cloned");
          n.$slideTrack
            .find(".slick-cloned")
            .find("[id]")
            .each(function () {
              e(this).attr("id", "");
            });
        }
      }),
      (i.prototype.interrupt = function (e) {
        var i = this;
        e || i.autoPlay(), (i.interrupted = e);
      }),
      (i.prototype.selectHandler = function (i) {
        var t = this,
          o = e(i.target).is(".slick-slide")
            ? e(i.target)
            : e(i.target).parents(".slick-slide"),
          n = parseInt(o.attr("data-slick-index"));
        n || (n = 0),
          t.slideCount <= t.options.slidesToShow
            ? t.slideHandler(n, !1, !0)
            : t.slideHandler(n);
      }),
      (i.prototype.slideHandler = function (e, i, t) {
        var o,
          n,
          s,
          a,
          r,
          l = null,
          d = this;
        if (
          ((i = i || !1),
          !(
            (!0 === d.animating && !0 === d.options.waitForAnimate) ||
            (!0 === d.options.fade && d.currentSlide === e)
          ))
        )
          if (
            (!1 === i && d.asNavFor(e),
            (o = e),
            (l = d.getLeft(o)),
            (a = d.getLeft(d.currentSlide)),
            (d.currentLeft = null === d.swipeLeft ? a : d.swipeLeft),
            !1 === d.options.infinite &&
              !1 === d.options.centerMode &&
              (e < 0 || e > d.getDotCount() * d.options.slidesToScroll))
          )
            !1 === d.options.fade &&
              ((o = d.currentSlide),
              !0 !== t
                ? d.animateSlide(a, function () {
                    d.postSlide(o);
                  })
                : d.postSlide(o));
          else if (
            !1 === d.options.infinite &&
            !0 === d.options.centerMode &&
            (e < 0 || e > d.slideCount - d.options.slidesToScroll)
          )
            !1 === d.options.fade &&
              ((o = d.currentSlide),
              !0 !== t
                ? d.animateSlide(a, function () {
                    d.postSlide(o);
                  })
                : d.postSlide(o));
          else {
            if (
              (d.options.autoplay && clearInterval(d.autoPlayTimer),
              (n =
                o < 0
                  ? d.slideCount % d.options.slidesToScroll != 0
                    ? d.slideCount - (d.slideCount % d.options.slidesToScroll)
                    : d.slideCount + o
                  : o >= d.slideCount
                  ? d.slideCount % d.options.slidesToScroll != 0
                    ? 0
                    : o - d.slideCount
                  : o),
              (d.animating = !0),
              d.$slider.trigger("beforeChange", [d, d.currentSlide, n]),
              (s = d.currentSlide),
              (d.currentSlide = n),
              d.setSlideClasses(d.currentSlide),
              d.options.asNavFor &&
                (r = (r = d.getNavTarget()).slick("getSlick")).slideCount <=
                  r.options.slidesToShow &&
                r.setSlideClasses(d.currentSlide),
              d.updateDots(),
              d.updateArrows(),
              !0 === d.options.fade)
            )
              return (
                !0 !== t
                  ? (d.fadeSlideOut(s),
                    d.fadeSlide(n, function () {
                      d.postSlide(n);
                    }))
                  : d.postSlide(n),
                void d.animateHeight()
              );
            !0 !== t
              ? d.animateSlide(l, function () {
                  d.postSlide(n);
                })
              : d.postSlide(n);
          }
      }),
      (i.prototype.startLoad = function () {
        var e = this;
        !0 === e.options.arrows &&
          e.slideCount > e.options.slidesToShow &&
          (e.$prevArrow.hide(), e.$nextArrow.hide()),
          !0 === e.options.dots &&
            e.slideCount > e.options.slidesToShow &&
            e.$dots.hide(),
          e.$slider.addClass("slick-loading");
      }),
      (i.prototype.swipeDirection = function () {
        var e,
          i,
          t,
          o,
          n = this;
        return (
          (e = n.touchObject.startX - n.touchObject.curX),
          (i = n.touchObject.startY - n.touchObject.curY),
          (t = Math.atan2(i, e)),
          (o = Math.round((180 * t) / Math.PI)) < 0 && (o = 360 - Math.abs(o)),
          (o <= 45 && o >= 0) || (o <= 360 && o >= 315)
            ? !1 === n.options.rtl
              ? "left"
              : "right"
            : o >= 135 && o <= 225
            ? !1 === n.options.rtl
              ? "right"
              : "left"
            : !0 === n.options.verticalSwiping
            ? o >= 35 && o <= 135
              ? "down"
              : "up"
            : "vertical"
        );
      }),
      (i.prototype.swipeEnd = function (e) {
        var i,
          t,
          o = this;
        if (((o.dragging = !1), (o.swiping = !1), o.scrolling))
          return (o.scrolling = !1), !1;
        if (
          ((o.interrupted = !1),
          (o.shouldClick = !(o.touchObject.swipeLength > 10)),
          void 0 === o.touchObject.curX)
        )
          return !1;
        if (
          (!0 === o.touchObject.edgeHit &&
            o.$slider.trigger("edge", [o, o.swipeDirection()]),
          o.touchObject.swipeLength >= o.touchObject.minSwipe)
        ) {
          switch ((t = o.swipeDirection())) {
            case "left":
            case "down":
              (i = o.options.swipeToSlide
                ? o.checkNavigable(o.currentSlide + o.getSlideCount())
                : o.currentSlide + o.getSlideCount()),
                (o.currentDirection = 0);
              break;
            case "right":
            case "up":
              (i = o.options.swipeToSlide
                ? o.checkNavigable(o.currentSlide - o.getSlideCount())
                : o.currentSlide - o.getSlideCount()),
                (o.currentDirection = 1);
          }
          "vertical" != t &&
            (o.slideHandler(i),
            (o.touchObject = {}),
            o.$slider.trigger("swipe", [o, t]));
        } else
          o.touchObject.startX !== o.touchObject.curX &&
            (o.slideHandler(o.currentSlide), (o.touchObject = {}));
      }),
      (i.prototype.swipeHandler = function (e) {
        var i = this;
        if (
          !(
            !1 === i.options.swipe ||
            ("ontouchend" in document && !1 === i.options.swipe) ||
            (!1 === i.options.draggable && -1 !== e.type.indexOf("mouse"))
          )
        )
          switch (
            ((i.touchObject.fingerCount =
              e.originalEvent && void 0 !== e.originalEvent.touches
                ? e.originalEvent.touches.length
                : 1),
            (i.touchObject.minSwipe = i.listWidth / i.options.touchThreshold),
            !0 === i.options.verticalSwiping &&
              (i.touchObject.minSwipe =
                i.listHeight / i.options.touchThreshold),
            e.data.action)
          ) {
            case "start":
              i.swipeStart(e);
              break;
            case "move":
              i.swipeMove(e);
              break;
            case "end":
              i.swipeEnd(e);
          }
      }),
      (i.prototype.swipeMove = function (e) {
        var i,
          t,
          o,
          n,
          s,
          a,
          r = this;
        return (
          (s = void 0 !== e.originalEvent ? e.originalEvent.touches : null),
          !(!r.dragging || r.scrolling || (s && 1 !== s.length)) &&
            ((i = r.getLeft(r.currentSlide)),
            (r.touchObject.curX = void 0 !== s ? s[0].pageX : e.clientX),
            (r.touchObject.curY = void 0 !== s ? s[0].pageY : e.clientY),
            (r.touchObject.swipeLength = Math.round(
              Math.sqrt(Math.pow(r.touchObject.curX - r.touchObject.startX, 2))
            )),
            (a = Math.round(
              Math.sqrt(Math.pow(r.touchObject.curY - r.touchObject.startY, 2))
            )),
            !r.options.verticalSwiping && !r.swiping && a > 4
              ? ((r.scrolling = !0), !1)
              : (!0 === r.options.verticalSwiping &&
                  (r.touchObject.swipeLength = a),
                (t = r.swipeDirection()),
                void 0 !== e.originalEvent &&
                  r.touchObject.swipeLength > 4 &&
                  ((r.swiping = !0), e.preventDefault()),
                (n =
                  (!1 === r.options.rtl ? 1 : -1) *
                  (r.touchObject.curX > r.touchObject.startX ? 1 : -1)),
                !0 === r.options.verticalSwiping &&
                  (n = r.touchObject.curY > r.touchObject.startY ? 1 : -1),
                (o = r.touchObject.swipeLength),
                (r.touchObject.edgeHit = !1),
                !1 === r.options.infinite &&
                  ((0 === r.currentSlide && "right" === t) ||
                    (r.currentSlide >= r.getDotCount() && "left" === t)) &&
                  ((o = r.touchObject.swipeLength * r.options.edgeFriction),
                  (r.touchObject.edgeHit = !0)),
                !1 === r.options.vertical
                  ? (r.swipeLeft = i + o * n)
                  : (r.swipeLeft =
                      i + o * (r.$list.height() / r.listWidth) * n),
                !0 === r.options.verticalSwiping && (r.swipeLeft = i + o * n),
                !0 !== r.options.fade &&
                  !1 !== r.options.touchMove &&
                  (!0 === r.animating
                    ? ((r.swipeLeft = null), !1)
                    : void r.setCSS(r.swipeLeft))))
        );
      }),
      (i.prototype.swipeStart = function (e) {
        var i,
          t = this;
        if (
          ((t.interrupted = !0),
          1 !== t.touchObject.fingerCount ||
            t.slideCount <= t.options.slidesToShow)
        )
          return (t.touchObject = {}), !1;
        void 0 !== e.originalEvent &&
          void 0 !== e.originalEvent.touches &&
          (i = e.originalEvent.touches[0]),
          (t.touchObject.startX = t.touchObject.curX =
            void 0 !== i ? i.pageX : e.clientX),
          (t.touchObject.startY = t.touchObject.curY =
            void 0 !== i ? i.pageY : e.clientY),
          (t.dragging = !0);
      }),
      (i.prototype.unfilterSlides = i.prototype.slickUnfilter =
        function () {
          var e = this;
          null !== e.$slidesCache &&
            (e.unload(),
            e.$slideTrack.children(this.options.slide).detach(),
            e.$slidesCache.appendTo(e.$slideTrack),
            e.reinit());
        }),
      (i.prototype.unload = function () {
        var i = this;
        e(".slick-cloned", i.$slider).remove(),
          i.$dots && i.$dots.remove(),
          i.$prevArrow &&
            i.htmlExpr.test(i.options.prevArrow) &&
            i.$prevArrow.remove(),
          i.$nextArrow &&
            i.htmlExpr.test(i.options.nextArrow) &&
            i.$nextArrow.remove(),
          i.$slides
            .removeClass("slick-slide slick-active slick-visible slick-current")
            .attr("aria-hidden", "true")
            .css("width", "");
      }),
      (i.prototype.unslick = function (e) {
        var i = this;
        i.$slider.trigger("unslick", [i, e]), i.destroy();
      }),
      (i.prototype.updateArrows = function () {
        var e = this;
        Math.floor(e.options.slidesToShow / 2),
          !0 === e.options.arrows &&
            e.slideCount > e.options.slidesToShow &&
            !e.options.infinite &&
            (e.$prevArrow
              .removeClass("slick-disabled")
              .attr("aria-disabled", "false"),
            e.$nextArrow
              .removeClass("slick-disabled")
              .attr("aria-disabled", "false"),
            0 === e.currentSlide
              ? (e.$prevArrow
                  .addClass("slick-disabled")
                  .attr("aria-disabled", "true"),
                e.$nextArrow
                  .removeClass("slick-disabled")
                  .attr("aria-disabled", "false"))
              : ((e.currentSlide >= e.slideCount - e.options.slidesToShow &&
                  !1 === e.options.centerMode) ||
                  (e.currentSlide >= e.slideCount - 1 &&
                    !0 === e.options.centerMode)) &&
                (e.$nextArrow
                  .addClass("slick-disabled")
                  .attr("aria-disabled", "true"),
                e.$prevArrow
                  .removeClass("slick-disabled")
                  .attr("aria-disabled", "false")));
      }),
      (i.prototype.updateDots = function () {
        var e = this;
        null !== e.$dots &&
          (e.$dots.find("li").removeClass("slick-active").end(),
          e.$dots
            .find("li")
            .eq(Math.floor(e.currentSlide / e.options.slidesToScroll))
            .addClass("slick-active"));
      }),
      (i.prototype.visibility = function () {
        var e = this;
        e.options.autoplay &&
          (document[e.hidden] ? (e.interrupted = !0) : (e.interrupted = !1));
      }),
      (e.fn.slick = function (e) {
        var t,
          o,
          n = this,
          s = e,
          a = Array.prototype.slice.call(arguments, 1),
          r = n.length;
        for (t = 0; t < r; t++)
          if (
            ("object" == typeof s || void 0 === s
              ? (n[t].slick = new i(n[t], s))
              : (o = n[t].slick[s].apply(n[t].slick, a)),
            void 0 !== o)
          )
            return o;
        return n;
      });
  }),
  (function (e, i) {
    "function" == typeof define && define.amd
      ? define(["jquery"], function (t) {
          return i(e, t);
        })
      : "object" == typeof module && "object" == typeof module.exports
      ? (module.exports = i(e, require("jquery")))
      : (e.lity = i(e, e.jQuery || e.Zepto));
  })("undefined" != typeof window ? window : this, function (e, i) {
    "use strict";
    function t(e) {
      var i = G();
      return (
        N && e.length
          ? (e.one(N, i.resolve), setTimeout(i.resolve, 500))
          : i.resolve(),
        i.promise()
      );
    }
    function o(e, t, o) {
      if (1 === arguments.length) return i.extend({}, e);
      if ("string" == typeof t) {
        if (void 0 === o) return void 0 === e[t] ? null : e[t];
        e[t] = o;
      } else i.extend(e, t);
      return this;
    }
    function n(e) {
      for (
        var i,
          t = decodeURI(e.split("#")[0]).split("&"),
          o = {},
          n = 0,
          s = t.length;
        n < s;
        n++
      )
        t[n] && (o[(i = t[n].split("="))[0]] = i[1]);
      return o;
    }
    function s(e, t) {
      return e + (e.indexOf("?") > -1 ? "&" : "?") + i.param(t);
    }
    function a(e, i) {
      var t = e.indexOf("#");
      return -1 === t ? i : (t > 0 && (e = e.substr(t)), i + e);
    }
    function r(e) {
      return i('<span class="lity-error"/>').append(e);
    }
    function l(e, t) {
      var o =
          (t.opener() && t.opener().data("lity-desc")) ||
          "Image with no description",
        n = i('<img src="' + e + '" alt="' + o + '"/>'),
        s = G(),
        a = function () {
          s.reject(r("Failed loading image"));
        };
      return (
        n
          .on("load", function () {
            if (0 === this.naturalWidth) return a();
            s.resolve(n);
          })
          .on("error", a),
        s.promise()
      );
    }
    function d(e, t) {
      var o, n, s;
      try {
        o = i(e);
      } catch (e) {
        return !1;
      }
      return (
        !!o.length &&
        ((n = i('<i style="display:none !important"/>')),
        (s = o.hasClass("lity-hide")),
        t.element().one("lity:remove", function () {
          n.before(o).remove(),
            s && !o.closest(".lity-content").length && o.addClass("lity-hide");
        }),
        o.removeClass("lity-hide").after(n))
      );
    }
    function c(e) {
      var t = I.exec(e);
      return (
        !!t &&
        h(
          a(
            e,
            s(
              "https://www.youtube" + (t[2] || "") + ".com/embed/" + t[4],
              i.extend({ autoplay: 1 }, n(t[5] || ""))
            )
          )
        )
      );
    }
    function u(e) {
      var t = D.exec(e);
      return (
        !!t &&
        h(
          a(
            e,
            s(
              "https://player.vimeo.com/video/" + t[3],
              i.extend({ autoplay: 1 }, n(t[4] || ""))
            )
          )
        )
      );
    }
    function p(e) {
      var t = L.exec(e);
      return (
        !!t &&
        (0 !== e.indexOf("http") && (e = "https:" + e),
        h(
          a(
            e,
            s(
              "https://www.facebook.com/plugins/video.php?href=" + e,
              i.extend({ autoplay: 1 }, n(t[4] || ""))
            )
          )
        ))
      );
    }
    function T(e) {
      var i = O.exec(e);
      return (
        !!i &&
        h(
          a(
            e,
            s("https://www.google." + i[3] + "/maps?" + i[6], {
              output: i[6].indexOf("layer=c") > 0 ? "svembed" : "embed",
            })
          )
        )
      );
    }
    function h(e) {
      return (
        '<div class="lity-iframe-container"><iframe frameborder="0" allowfullscreen src="' +
        e +
        '"/></div>'
      );
    }
    function f() {
      return C.documentElement.clientHeight
        ? C.documentElement.clientHeight
        : Math.round(k.height());
    }
    function b(e) {
      var i = g();
      i &&
        (27 === e.keyCode && i.options("esc") && i.close(),
        9 === e.keyCode && S(e, i));
    }
    function S(e, i) {
      var t = i.element().find($),
        o = t.index(C.activeElement);
      e.shiftKey && o <= 0
        ? (t.get(t.length - 1).focus(), e.preventDefault())
        : e.shiftKey ||
          o !== t.length - 1 ||
          (t.get(0).focus(), e.preventDefault());
    }
    function m() {
      i.each(H, function (e, i) {
        i.resize();
      });
    }
    function v(e) {
      1 === H.unshift(e) &&
        (M.addClass("lity-active"), k.on({ resize: m, keydown: b })),
        i("body > *")
          .not(e.element())
          .addClass("lity-hidden")
          .each(function () {
            var e = i(this);
            void 0 === e.data(B) && e.data(B, e.attr(_) || null);
          })
          .attr(_, "true");
    }
    function w(e) {
      var t;
      e.element().attr(_, "true"),
        1 === H.length &&
          (M.removeClass("lity-active"), k.off({ resize: m, keydown: b })),
        (t = (H = i.grep(H, function (i) {
          return e !== i;
        })).length
          ? H[0].element()
          : i(".lity-hidden"))
          .removeClass("lity-hidden")
          .each(function () {
            var e = i(this),
              t = e.data(B);
            t ? e.attr(_, t) : e.removeAttr(_), e.removeData(B);
          });
    }
    function g() {
      return 0 === H.length ? null : H[0];
    }
    function P(e, t, o, n) {
      var s,
        a = "inline",
        r = i.extend({}, o);
      return (
        n && r[n]
          ? ((s = r[n](e, t)), (a = n))
          : (i.each(["inline", "iframe"], function (e, i) {
              delete r[i], (r[i] = o[i]);
            }),
            i.each(r, function (i, o) {
              return (
                !o ||
                !(!o.test || o.test(e, t)) ||
                (!1 !== (s = o(e, t)) ? ((a = i), !1) : void 0)
              );
            })),
        { handler: a, content: s || "" }
      );
    }
    function y(e, n, s, a) {
      function r(e) {
        (c = i(e).css("max-height", f() + "px")),
          d.find(".lity-loader").each(function () {
            var e = i(this);
            t(e).always(function () {
              e.remove();
            });
          }),
          d.removeClass("lity-loading").find(".lity-content").empty().append(c),
          (p = !0),
          c.trigger("lity:ready", [u]);
      }
      var l,
        d,
        c,
        u = this,
        p = !1,
        T = !1;
      (n = i.extend({}, E, n)),
        (d = i(n.template)),
        (u.element = function () {
          return d;
        }),
        (u.opener = function () {
          return s;
        }),
        (u.options = i.proxy(o, u, n)),
        (u.handlers = i.proxy(o, u, n.handlers)),
        (u.resize = function () {
          p &&
            !T &&
            c.css("max-height", f() + "px").trigger("lity:resize", [u]);
        }),
        (u.close = function () {
          if (p && !T) {
            (T = !0), w(u);
            var e = G();
            if (
              a &&
              (C.activeElement === d[0] || i.contains(d[0], C.activeElement))
            )
              try {
                a.focus();
              } catch (e) {}
            return (
              c.trigger("lity:close", [u]),
              d.removeClass("lity-opened").addClass("lity-closed"),
              t(c.add(d)).always(function () {
                c.trigger("lity:remove", [u]),
                  d.remove(),
                  (d = void 0),
                  e.resolve();
              }),
              e.promise()
            );
          }
        }),
        (l = P(e, u, n.handlers, n.handler)),
        d
          .attr(_, "false")
          .addClass("lity-loading lity-opened lity-" + l.handler)
          .appendTo("body")
          .focus()
          .on("click", "[data-lity-close]", function (e) {
            i(e.target).is("[data-lity-close]") && u.close();
          })
          .trigger("lity:open", [u]),
        v(u),
        i.when(l.content).always(r);
    }
    function A(e, t, o) {
      e.preventDefault
        ? (e.preventDefault(),
          (e =
            (o = i(this)).data("lity-target") ||
            o.attr("href") ||
            o.attr("src")))
        : (o = i(o));
      var n = new y(
        e,
        i.extend({}, o.data("lity-options") || o.data("lity"), t),
        o,
        C.activeElement
      );
      if (!e.preventDefault) return n;
    }
    var C = e.document,
      k = i(e),
      G = i.Deferred,
      M = i("html"),
      H = [],
      _ = "aria-hidden",
      B = "lity-" + _,
      $ =
        'a[href],area[href],input:not([disabled]),select:not([disabled]),textarea:not([disabled]),button:not([disabled]),iframe,object,embed,[contenteditable],[tabindex]:not([tabindex^="-"])',
      E = {
        esc: !0,
        handler: null,
        handlers: {
          image: l,
          inline: d,
          youtube: c,
          vimeo: u,
          googlemaps: T,
          facebookvideo: p,
          iframe: h,
        },
        template:
          '<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"><div class="lity-wrap" data-lity-close role="document"><div class="lity-loader" aria-hidden="true">Loading...</div><div class="lity-container"><div class="lity-content"></div><button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button></div></div></div>',
      },
      x =
        /(^data:image\/)|(\.(png|jpe?g|gif|svg|webp|bmp|ico|tiff?)(\?\S*)?$)/i,
      I =
        /(youtube(-nocookie)?\.com|youtu\.be)\/(watch\?v=|v\/|u\/|embed\/?)?([\w-]{11})(.*)?/i,
      D = /(vimeo(pro)?.com)\/(?:[^\d]+)?(\d+)\??(.*)?$/,
      O = /((maps|www)\.)?google\.([^\/\?]+)\/?((maps\/?)?\?)(.*)/i,
      L = /(facebook\.com)\/([a-z0-9_-]*)\/videos\/([0-9]*)(.*)?$/i,
      N = (function () {
        var e = C.createElement("div"),
          i = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend",
          };
        for (var t in i) if (void 0 !== e.style[t]) return i[t];
        return !1;
      })();
    return (
      (l.test = function (e) {
        return x.test(e);
      }),
      (A.version = "2.2.2"),
      (A.options = i.proxy(o, A, E)),
      (A.handlers = i.proxy(o, A, E.handlers)),
      (A.current = g),
      i(C).on("click.lity", "[data-lity]", A),
      A
    );
  }),
  (function (e) {
    "use strict";
    "function" == typeof define && define.amd
      ? define(["jquery"], e)
      : "object" == typeof exports
      ? (module.exports = e(require("jquery")))
      : e(jQuery);
  })(function (e) {
    "use strict";
    var i = "animsition",
      t = {
        init: function (o) {
          (o = e.extend(
            {
              inClass: "fade-in",
              outClass: "fade-out",
              inDuration: 1500,
              outDuration: 800,
              linkElement: ".animsition-link",
              loading: !0,
              loadingParentElement: "body",
              loadingClass: "animsition-loading",
              loadingInner: "",
              timeout: !1,
              timeoutCountdown: 5e3,
              onLoadEvent: !0,
              browser: ["animation-duration", "-webkit-animation-duration"],
              overlay: !1,
              overlayClass: "animsition-overlay-slide",
              overlayParentElement: "body",
              transition: function (e) {
                window.location.href = e;
              },
            },
            o
          )),
            (t.settings = {
              timer: !1,
              data: {
                inClass: "animsition-in-class",
                inDuration: "animsition-in-duration",
                outClass: "animsition-out-class",
                outDuration: "animsition-out-duration",
                overlay: "animsition-overlay",
              },
              events: {
                inStart: "animsition.inStart",
                inEnd: "animsition.inEnd",
                outStart: "animsition.outStart",
                outEnd: "animsition.outEnd",
              },
            });
          var n = t.supportCheck.call(this, o),
            s;
          return n || !(o.browser.length > 0) || (n && this.length)
            ? (t.optionCheck.call(this, o) &&
                e("." + o.overlayClass).length <= 0 &&
                t.addOverlay.call(this, o),
              o.loading &&
                e("." + o.loadingClass).length <= 0 &&
                t.addLoading.call(this, o),
              this.each(function () {
                var n = this,
                  s = e(this),
                  a = e(window),
                  r = e(document),
                  l;
                s.data(i) ||
                  ((o = e.extend({}, o)),
                  s.data(i, { options: o }),
                  o.timeout && t.addTimer.call(n),
                  o.onLoadEvent &&
                    a.on("load." + i, function () {
                      t.settings.timer && clearTimeout(t.settings.timer),
                        t.in.call(n);
                    }),
                  a.on("pageshow." + i, function (e) {
                    e.originalEvent.persisted && t.in.call(n);
                  }),
                  a.on("unload." + i, function () {}),
                  r.on("click." + i, o.linkElement, function (i) {
                    i.preventDefault();
                    var o = e(this),
                      s = o.attr("href");
                    2 === i.which ||
                    i.metaKey ||
                    i.shiftKey ||
                    (-1 !== navigator.platform.toUpperCase().indexOf("WIN") &&
                      i.ctrlKey)
                      ? window.open(s, "_blank")
                      : t.out.call(n, o, s);
                  }));
              }))
            : ("console" in window ||
                ((window.console = {}),
                (window.console.log = function (e) {
                  return e;
                })),
              this.length ||
                console.log("Animsition: Element does not exist on page."),
              n || console.log("Animsition: Does not support this browser."),
              t.destroy.call(this));
        },
        addOverlay: function (i) {
          e(i.overlayParentElement).prepend(
            '<div class="' + i.overlayClass + '"></div>'
          );
        },
        addLoading: function (i) {
          e(i.loadingParentElement).append(
            '<div class="' + i.loadingClass + '">' + i.loadingInner + "</div>"
          );
        },
        removeLoading: function () {
          var t,
            o = e(this).data(i).options,
            n;
          e(o.loadingParentElement)
            .children("." + o.loadingClass)
            .fadeOut()
            .remove();
        },
        addTimer: function () {
          var o = this,
            n,
            s = e(this).data(i).options;
          t.settings.timer = setTimeout(function () {
            t.in.call(o), e(window).off("load." + i);
          }, s.timeoutCountdown);
        },
        supportCheck: function (i) {
          var t = e(this),
            o = i.browser,
            n = o.length,
            s = !1;
          0 === n && (s = !0);
          for (var a = 0; n > a; a++)
            if ("string" == typeof t.css(o[a])) {
              s = !0;
              break;
            }
          return s;
        },
        optionCheck: function (i) {
          var o,
            n = e(this);
          return (o = !(!i.overlay && !n.data(t.settings.data.overlay)));
        },
        animationCheck: function (t, o, n) {
          var s,
            a = e(this).data(i).options,
            r = typeof t,
            l = !o && "number" === r,
            d = o && "string" === r && t.length > 0;
          return (
            l || d
              ? (t = t)
              : o && n
              ? (t = a.inClass)
              : !o && n
              ? (t = a.inDuration)
              : o && !n
              ? (t = a.outClass)
              : o || n || (t = a.outDuration),
            t
          );
        },
        in: function () {
          var o = this,
            n = e(this),
            s = n.data(i).options,
            a = n.data(t.settings.data.inDuration),
            r = n.data(t.settings.data.inClass),
            l = t.animationCheck.call(o, a, !1, !0),
            d = t.animationCheck.call(o, r, !0, !0),
            c = t.optionCheck.call(o, s),
            u = n.data(i).outClass;
          s.loading && t.removeLoading.call(o),
            u && n.removeClass(u),
            c ? t.inOverlay.call(o, d, l) : t.inDefault.call(o, d, l);
        },
        inDefault: function (i, o) {
          var n = e(this);
          n.css({ "animation-duration": o + "ms" })
            .addClass(i)
            .trigger(t.settings.events.inStart)
            .animateCallback(function () {
              n.removeClass(i)
                .css({ opacity: 1 })
                .trigger(t.settings.events.inEnd);
            });
        },
        inOverlay: function (o, n) {
          var s = e(this),
            a = s.data(i).options;
          s.css({ opacity: 1 }).trigger(t.settings.events.inStart),
            e(a.overlayParentElement)
              .children("." + a.overlayClass)
              .css({ "animation-duration": n + "ms" })
              .addClass(o)
              .animateCallback(function () {
                s.trigger(t.settings.events.inEnd);
              });
        },
        out: function (o, n) {
          var s = this,
            a = e(this),
            r = a.data(i).options,
            l = o.data(t.settings.data.outClass),
            d = a.data(t.settings.data.outClass),
            c = o.data(t.settings.data.outDuration),
            u = a.data(t.settings.data.outDuration),
            p = l || d,
            T = c || u,
            h = t.animationCheck.call(s, p, !0, !1),
            f = t.animationCheck.call(s, T, !1, !1),
            b = t.optionCheck.call(s, r);
          (a.data(i).outClass = h),
            b ? t.outOverlay.call(s, h, f, n) : t.outDefault.call(s, h, f, n);
        },
        outDefault: function (o, n, s) {
          var a = e(this),
            r = a.data(i).options;
          a.css({ "animation-duration": n + 1 + "ms" })
            .addClass(o)
            .trigger(t.settings.events.outStart)
            .animateCallback(function () {
              a.trigger(t.settings.events.outEnd), r.transition(s);
            });
        },
        outOverlay: function (o, n, s) {
          var a = this,
            r = e(this),
            l = r.data(i).options,
            d = r.data(t.settings.data.inClass),
            c = t.animationCheck.call(a, d, !0, !0);
          e(l.overlayParentElement)
            .children("." + l.overlayClass)
            .css({ "animation-duration": n + 1 + "ms" })
            .removeClass(c)
            .addClass(o)
            .trigger(t.settings.events.outStart)
            .animateCallback(function () {
              r.trigger(t.settings.events.outEnd), l.transition(s);
            });
        },
        destroy: function () {
          return this.each(function () {
            var t = e(this);
            e(window).off("." + i), t.css({ opacity: 1 }).removeData(i);
          });
        },
      };
    (e.fn.animateCallback = function (i) {
      var t = "animationend webkitAnimationEnd";
      return this.each(function () {
        var o = e(this);
        o.on(t, function () {
          return o.off(t), i.call(this);
        });
      });
    }),
      (e.fn.animsition = function (o) {
        return t[o]
          ? t[o].apply(this, Array.prototype.slice.call(arguments, 1))
          : "object" != typeof o && o
          ? void e.error("Method " + o + " does not exist on jQuery." + i)
          : t.init.apply(this, arguments);
      });
  }),
  (function (e, i) {
    "object" == typeof exports && "object" == typeof module
      ? (module.exports = i())
      : "function" == typeof define && define.amd
      ? define([], i)
      : "object" == typeof exports
      ? (exports.AOS = i())
      : (e.AOS = i());
  })(this, function () {
    return (function (e) {
      function i(o) {
        if (t[o]) return t[o].exports;
        var n = (t[o] = { exports: {}, id: o, loaded: !1 });
        return (
          e[o].call(n.exports, n, n.exports, i), (n.loaded = !0), n.exports
        );
      }
      var t = {};
      return (i.m = e), (i.c = t), (i.p = "dist/"), i(0);
    })([
      function (e, i, t) {
        "use strict";
        function o(e) {
          return e && e.__esModule ? e : { default: e };
        }
        var n =
            Object.assign ||
            function (e) {
              for (var i = 1; i < arguments.length; i++) {
                var t = arguments[i];
                for (var o in t)
                  Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
              }
              return e;
            },
          s,
          a = (o(t(1)), t(5)),
          r = o(a),
          l,
          d = o(t(6)),
          c,
          u = o(t(7)),
          p,
          T = o(t(8)),
          h,
          f = o(t(9)),
          b,
          S = o(t(10)),
          m,
          v = o(t(13)),
          w = [],
          g = !1,
          P = document.all && !window.atob,
          y = {
            offset: 120,
            delay: 0,
            easing: "ease",
            duration: 400,
            disable: !1,
            once: !1,
            startEvent: "DOMContentLoaded",
          },
          A = function (e) {
            var i = !(arguments.length <= 0 || void 0 === e) && e;
            return (
              i && (g = !0),
              g
                ? ((w = (0, S.default)(w, y)), (0, f.default)(w, y.once), w)
                : void 0
            );
          },
          C = function () {
            (w = (0, v.default)()), A();
          },
          k = function () {
            w.forEach(function (e, i) {
              e.node.removeAttribute("data-aos"),
                e.node.removeAttribute("data-aos-easing"),
                e.node.removeAttribute("data-aos-duration"),
                e.node.removeAttribute("data-aos-delay");
            });
          },
          G = function (e) {
            return (
              !0 === e ||
              ("mobile" === e && T.default.mobile()) ||
              ("phone" === e && T.default.phone()) ||
              ("tablet" === e && T.default.tablet()) ||
              ("function" == typeof e && !0 === e())
            );
          },
          M = function (e) {
            return (
              (y = n(y, e)),
              (w = (0, v.default)()),
              G(y.disable) || P
                ? k()
                : (document
                    .querySelector("body")
                    .setAttribute("data-aos-easing", y.easing),
                  document
                    .querySelector("body")
                    .setAttribute("data-aos-duration", y.duration),
                  document
                    .querySelector("body")
                    .setAttribute("data-aos-delay", y.delay),
                  "DOMContentLoaded" === y.startEvent &&
                  ["complete", "interactive"].indexOf(document.readyState) > -1
                    ? A(!0)
                    : "load" === y.startEvent
                    ? window.addEventListener(y.startEvent, function () {
                        A(!0);
                      })
                    : document.addEventListener(y.startEvent, function () {
                        A(!0);
                      }),
                  window.addEventListener("resize", (0, d.default)(A, 50, !0)),
                  window.addEventListener(
                    "orientationchange",
                    (0, d.default)(A, 50, !0)
                  ),
                  window.addEventListener(
                    "scroll",
                    (0, r.default)(function () {
                      (0, f.default)(w, y.once);
                    }, 99)
                  ),
                  document.addEventListener("DOMNodeRemoved", function (e) {
                    var i = e.target;
                    i &&
                      1 === i.nodeType &&
                      i.hasAttribute &&
                      i.hasAttribute("data-aos") &&
                      (0, d.default)(C, 50, !0);
                  }),
                  (0, u.default)("[data-aos]", C),
                  w)
            );
          };
        e.exports = { init: M, refresh: A, refreshHard: C };
      },
      function (e, i) {},
      ,
      ,
      ,
      function (e, i, t) {
        "use strict";
        function o(e, i, t) {
          var o = !0,
            s = !0;
          if ("function" != typeof e) throw new TypeError(r);
          return (
            n(t) &&
              ((o = "leading" in t ? !!t.leading : o),
              (s = "trailing" in t ? !!t.trailing : s)),
            a(e, i, { leading: o, maxWait: i, trailing: s })
          );
        }
        function n(e) {
          var i = void 0 === e ? "undefined" : s(e);
          return !!e && ("object" == i || "function" == i);
        }
        var s =
            "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
              ? function (e) {
                  return typeof e;
                }
              : function (e) {
                  return e &&
                    "function" == typeof Symbol &&
                    e.constructor === Symbol
                    ? "symbol"
                    : typeof e;
                },
          a = t(6),
          r = "Expected a function";
        e.exports = o;
      },
      function (e, i) {
        "use strict";
        function t(e, i, t) {
          function o(i) {
            var t = f,
              o = b;
            return (f = b = void 0), (A = i), (m = e.apply(o, t));
          }
          function s(e) {
            return (A = e), (v = setTimeout(c, i)), C ? o(e) : m;
          }
          function a(e) {
            var t,
              o,
              n = i - (e - w);
            return k ? P(n, S - (e - A)) : n;
          }
          function l(e) {
            var t = e - w,
              o;
            return !w || t >= i || 0 > t || (k && e - A >= S);
          }
          function c() {
            var e = y();
            return l(e) ? u(e) : void (v = setTimeout(c, a(e)));
          }
          function u(e) {
            return (
              clearTimeout(v),
              (v = void 0),
              G && f ? o(e) : ((f = b = void 0), m)
            );
          }
          function p() {
            void 0 !== v && clearTimeout(v), (w = A = 0), (f = b = v = void 0);
          }
          function T() {
            return void 0 === v ? m : u(y());
          }
          function h() {
            var e = y(),
              t = l(e);
            if (((f = arguments), (b = this), (w = e), t)) {
              if (void 0 === v) return s(w);
              if (k) return clearTimeout(v), (v = setTimeout(c, i)), o(w);
            }
            return void 0 === v && (v = setTimeout(c, i)), m;
          }
          var f,
            b,
            S,
            m,
            v,
            w = 0,
            A = 0,
            C = !1,
            k = !1,
            G = !0;
          if ("function" != typeof e) throw new TypeError(d);
          return (
            (i = r(i) || 0),
            n(t) &&
              ((C = !!t.leading),
              (S = (k = "maxWait" in t) ? g(r(t.maxWait) || 0, i) : S),
              (G = "trailing" in t ? !!t.trailing : G)),
            (h.cancel = p),
            (h.flush = T),
            h
          );
        }
        function o(e) {
          var i = n(e) ? w.call(e) : "";
          return i == u || i == p;
        }
        function n(e) {
          var i = void 0 === e ? "undefined" : l(e);
          return !!e && ("object" == i || "function" == i);
        }
        function s(e) {
          return !!e && "object" == (void 0 === e ? "undefined" : l(e));
        }
        function a(e) {
          return (
            "symbol" == (void 0 === e ? "undefined" : l(e)) ||
            (s(e) && w.call(e) == T)
          );
        }
        function r(e) {
          if ("number" == typeof e) return e;
          if (a(e)) return c;
          if (n(e)) {
            var i = o(e.valueOf) ? e.valueOf() : e;
            e = n(i) ? i + "" : i;
          }
          if ("string" != typeof e) return 0 === e ? e : +e;
          e = e.replace(h, "");
          var t = b.test(e);
          return t || S.test(e) ? m(e.slice(2), t ? 2 : 8) : f.test(e) ? c : +e;
        }
        var l =
            "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
              ? function (e) {
                  return typeof e;
                }
              : function (e) {
                  return e &&
                    "function" == typeof Symbol &&
                    e.constructor === Symbol
                    ? "symbol"
                    : typeof e;
                },
          d = "Expected a function",
          c = NaN,
          u = "[object Function]",
          p = "[object GeneratorFunction]",
          T = "[object Symbol]",
          h = /^\s+|\s+$/g,
          f = /^[-+]0x[0-9a-f]+$/i,
          b = /^0b[01]+$/i,
          S = /^0o[0-7]+$/i,
          m = parseInt,
          v,
          w = Object.prototype.toString,
          g = Math.max,
          P = Math.min,
          y = Date.now;
        e.exports = t;
      },
      function (e, i) {
        "use strict";
        function t(e, i) {
          a.push({ selector: e, fn: i }),
            !r &&
              s &&
              (r = new s(o)).observe(n.documentElement, {
                childList: !0,
                subtree: !0,
                removedNodes: !0,
              }),
            o();
        }
        function o() {
          for (var e, i, t = 0, o = a.length; o > t; t++) {
            e = a[t];
            for (
              var s, r = 0, l = (i = n.querySelectorAll(e.selector)).length;
              l > r;
              r++
            )
              (s = i[r]).ready || ((s.ready = !0), e.fn.call(s, s));
          }
        }
        Object.defineProperty(i, "__esModule", { value: !0 });
        var n = window.document,
          s = window.MutationObserver || window.WebKitMutationObserver,
          a = [],
          r = void 0;
        i.default = t;
      },
      function (e, i) {
        "use strict";
        function t(e, i) {
          if (!(e instanceof i))
            throw new TypeError("Cannot call a class as a function");
        }
        Object.defineProperty(i, "__esModule", { value: !0 });
        var o = (function () {
            function e(e, i) {
              for (var t = 0; t < i.length; t++) {
                var o = i[t];
                (o.enumerable = o.enumerable || !1),
                  (o.configurable = !0),
                  "value" in o && (o.writable = !0),
                  Object.defineProperty(e, o.key, o);
              }
            }
            return function (i, t, o) {
              return t && e(i.prototype, t), o && e(i, o), i;
            };
          })(),
          n = (function () {
            function e() {
              t(this, e);
            }
            return (
              o(e, [
                {
                  key: "phone",
                  value: function () {
                    var e = !1;
                    return (
                      (function (i) {
                        (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                          i
                        ) ||
                          /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                            i.substr(0, 4)
                          )) &&
                          (e = !0);
                      })(
                        navigator.userAgent || navigator.vendor || window.opera
                      ),
                      e
                    );
                  },
                },
                {
                  key: "mobile",
                  value: function () {
                    var e = !1;
                    return (
                      (function (i) {
                        (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
                          i
                        ) ||
                          /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                            i.substr(0, 4)
                          )) &&
                          (e = !0);
                      })(
                        navigator.userAgent || navigator.vendor || window.opera
                      ),
                      e
                    );
                  },
                },
                {
                  key: "tablet",
                  value: function () {
                    return this.mobile() && !this.phone();
                  },
                },
              ]),
              e
            );
          })();
        i.default = new n();
      },
      function (e, i) {
        "use strict";
        Object.defineProperty(i, "__esModule", { value: !0 });
        var t = function (e, i, t) {
            var o = e.node.getAttribute("data-aos-once");
            i > e.position
              ? e.node.classList.add("aos-animate")
              : void 0 !== o &&
                ("false" === o || (!t && "true" !== o)) &&
                e.node.classList.remove("aos-animate");
          },
          o = function (e, i) {
            var o = window.pageYOffset,
              n = window.innerHeight;
            e.forEach(function (e, s) {
              t(e, n + o, i);
            });
          };
        i.default = o;
      },
      function (e, i, t) {
        "use strict";
        function o(e) {
          return e && e.__esModule ? e : { default: e };
        }
        Object.defineProperty(i, "__esModule", { value: !0 });
        var n,
          s = o(t(11)),
          a = function (e, i) {
            return (
              e.forEach(function (e, t) {
                e.node.classList.add("aos-init"),
                  (e.position = (0, s.default)(e.node, i.offset));
              }),
              e
            );
          };
        i.default = a;
      },
      function (e, i, t) {
        "use strict";
        function o(e) {
          return e && e.__esModule ? e : { default: e };
        }
        Object.defineProperty(i, "__esModule", { value: !0 });
        var n,
          s = o(t(12)),
          a = function (e, i) {
            var t = 0,
              o = 0,
              n = window.innerHeight,
              a = {
                offset: e.getAttribute("data-aos-offset"),
                anchor: e.getAttribute("data-aos-anchor"),
                anchorPlacement: e.getAttribute("data-aos-anchor-placement"),
              };
            switch (
              (a.offset && !isNaN(a.offset) && (o = parseInt(a.offset)),
              a.anchor &&
                document.querySelectorAll(a.anchor) &&
                (e = document.querySelectorAll(a.anchor)[0]),
              (t = (0, s.default)(e).top),
              a.anchorPlacement)
            ) {
              case "top-bottom":
                break;
              case "center-bottom":
                t += e.offsetHeight / 2;
                break;
              case "bottom-bottom":
                t += e.offsetHeight;
                break;
              case "top-center":
                t += n / 2;
                break;
              case "bottom-center":
                t += n / 2 + e.offsetHeight;
                break;
              case "center-center":
                t += n / 2 + e.offsetHeight / 2;
                break;
              case "top-top":
                t += n;
                break;
              case "bottom-top":
                t += e.offsetHeight + n;
                break;
              case "center-top":
                t += e.offsetHeight / 2 + n;
            }
            return a.anchorPlacement || a.offset || isNaN(i) || (o = i), t + o;
          };
        i.default = a;
      },
      function (e, i) {
        "use strict";
        Object.defineProperty(i, "__esModule", { value: !0 });
        var t = function (e) {
          for (
            var i = 0, t = 0;
            e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop);

          )
            (i += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0)),
              (t += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0)),
              (e = e.offsetParent);
          return { top: t, left: i };
        };
        i.default = t;
      },
      function (e, i) {
        "use strict";
        Object.defineProperty(i, "__esModule", { value: !0 });
        var t = function (e) {
          e = e || document.querySelectorAll("[data-aos]");
          var i = [];
          return (
            [].forEach.call(e, function (e, t) {
              i.push({ node: e });
            }),
            i
          );
        };
        i.default = t;
      },
    ]);
  });
var _src = {
  md: !1,
  is_desktop: !0,
  is_touch: !1,
  is_tablet: !1,
  is_phone: !1,
  window_width: 0,
  window_height: 0,
  scroll_top: 0,
  ajax_path: "/wp-content/themes/ws-2018/_ajax.php",
  mobile: 768,
  constrained: 1200,
  mobile_nav: 895,
  overlay_video: !1,
  transition: 500,
  transition_fast: 250,
  standard_padding: 55,
  aos_offset: 100,
  previous_scroll: 0,
  scroll_to_gallery: !1,
  carousel_autoscroll_speed: 7e3,
  fix_header_after: 250,
  header_height: 0,
  hash: "",
  continent_code: "",
  continent_cookie_key: "_ws_continent",
  eu_cookie_consent_key: "_ws_eu_cookie_consent",
  non_eu_cookie_banner_dismissed_key: "_ws_non_eu_cookie_banner_dismissed",
  eu_cookie_banner_dismissed_key: "_ws_eu_cookie_banner_dismissed",
  cookie_expiration_in_days: 30,
  show_page_timeout: 3e3,
  document_init: function () {
    _src.bind_window_resize(),
      (_src.hash = window.location.hash.replace("#", "")),
      _src.set_body_classes(),
      _src.parse_links(),
      _src.disable_titles(),
      _src.bind_prevent_default(),
      _src.planvx(),
      _src.set_home_header_color(),
      _src.bind_global_functionality();
  },
  window_init: function () {
    _src.bind_window_resize(),
      _src.bind_window_scroll(),
      (_src.scroll_to_gallery = !0),
      AOS.refresh(),
      _src.md.phone() ||
        _src.md.tablet() ||
        $(".background-video video").each(function () {
          $(this).get(0).play();
        }),
      _src.deep_link_to_data_id();
  },
  set_home_header_color: function () {
    _src.window_width <= _src.mobile_nav &&
      $(".home").length &&
      $("#main-header").removeClass("black").addClass("white");
  },
  deep_link_to_data_id: function () {
    if (
      ((_src.header_height = $("#main-header").outerHeight()),
      $(".module[data-id='" + _src.hash + "']").length)
    ) {
      var e = $(".module[data-id='" + _src.hash + "']").offset().top,
        i = e - _src.aos_offset;
      _src.window_width <= _src.mobile_nav &&
        (i = e - _src.aos_offset - _src.header_height),
        _src.scroll_page(i),
        $("a[href*='" + _src.hash + "']")
          .parent()
          .addClass("current-menu-item");
    }
  },
  set_body_classes: function () {
    (_src.md = new MobileDetect(window.navigator.userAgent)),
      (_src.is_desktop = !0),
      $("body").addClass("desktop"),
      $("body").removeClass("phone"),
      $("body").removeClass("tablet"),
      $("body").removeClass("touch"),
      _src.md.phone() &&
        ($("body").removeClass("desktop"),
        $("body").removeClass("tablet"),
        $("body").addClass("touch"),
        $("body").addClass("phone"),
        (_src.is_desktop = !1),
        (_src.is_touch = !0),
        (_src.is_phone = !0),
        (_src.is_tablet = !1)),
      _src.md.tablet() &&
        ($("body").removeClass("desktop"),
        $("body").removeClass("phone"),
        $("body").addClass("touch"),
        $("body").addClass("tablet"),
        (_src.is_desktop = !1),
        (_src.is_touch = !0),
        (_src.is_tablet = !0),
        (_src.is_phone = !1));
  },
  bind_window_scroll: function () {
    (_src.scroll_top = $(window).scrollTop()),
      $(window).scroll(function () {
        (_src.scroll_top = $(window).scrollTop()),
          _src.window_width <= _src.mobile_nav
            ? _src.scroll_top > 0 &&
              _src.scroll_top < $(document).height() - $(window).height() &&
              (_src.scroll_top > _src.previous_scroll
                ? $("#main-header").hasClass("mobile-nav-visible") ||
                  setTimeout(function () {
                    $("#main-header").addClass("is-hidden");
                  }, _src.transition_fast)
                : setTimeout(function () {
                    $("#main-header").removeClass("is-hidden");
                  }, _src.transition_fast),
              (_src.previous_scroll = _src.scroll_top))
            : ($("#main-header").removeClass("is-hidden"),
              _src.scroll_top > _src.fix_header_after
                ? $("#main-header").addClass("fixed")
                : $("#main-header").removeClass("fixed"));
      }),
      _src.scroll_top > _src.fix_header_after &&
        $("#main-header").addClass("fixed");
  },
  bind_window_resize: function () {
    (_src.window_width = window.innerWidth
      ? window.innerWidth
      : $(window).width()),
      (_src.window_height = window.innerHeight
        ? window.innerHeight
        : $(window).height()),
      $(window).resize(function () {
        (_src.window_width = window.innerWidth
          ? window.innerWidth
          : $(window).width()),
          (_src.window_height = window.innerHeight
            ? window.innerHeight
            : $(window).height()),
          _src.set_arrow_size_and_position(),
          _src.set_notch_heights(),
          _src.window_width < _src.mobile && _src.runSlick();
      });
  },
  parse_links: function () {
    var e = new RegExp(location.host),
      i = "";
    $("a").each(function () {
      (i = $(this).attr("href")) &&
        ("#" == i.slice(0, 1)
          ? $(this).addClass("anchor-link")
          : "mailto" == i.slice(0, 6)
          ? $(this).addClass("mailto-link")
          : "_blank" == $(this).attr("target") ||
            (!e.test(i) && -1 != i.indexOf("http"))
          ? ($(this).addClass("external-link"),
            $(this).attr("target", "_blank"))
          : $(this).addClass("local-link"));
    });
  },
  disable_titles: function () {
    $("[title]").each(function () {
      var e = $(this);
      e.hasClass("fancybox") ||
        ($.data(this, "title", e.attr("title")), e.removeAttr("title"));
    });
  },
  bind_prevent_default: function () {
    $(".prevent-default, .prevent-default a").click(function (e) {
      e.preventDefault();
    });
  },
  planvx: function () {
    $(
      "h1:contains('Plan Vx'), h2:contains('Plan Vx'), h3:contains('Plan Vx')"
    ).each(function () {
      $(this).css("line-height", "1.01");
      var e = $(this).prop("nodeName"),
        i = "10px";
      "H2" == e ? (i = "8px") : "H3" == e && (i = "6px");
      var t = $(this).html();
      (t = t.replace(
        "Plan Vx",
        "Plan V<sub style='text-transform:none;top:" + i + "'>x</sub>"
      )),
        $(this).html(t);
    }),
      $(
        "h1:contains('COVID-19'), h2:contains('COVID-19'), h3:contains('COVID-19'), h1:contains('Covid-19'), h2:contains('Covid-19'), h3:contains('Covid-19')"
      ).each(function () {
        $(this).html(
          $(this)
            .html()
            .replace("COVID-19", "COVID&#8209;19")
            .replace("Covid-19", "COVID&#8209;19")
        );
      });
  },
  runSlick: function () {
    $(".carousel-module .carousel").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: !0,
      arrows: !1,
      autoplay: !0,
      autoplaySpeed: _src.carousel_autoscroll_speed,
      pauseOnFocus: !0,
      pauseOnHover: !0,
      pauseOnDotsHover: !0,
      responsive: [{ breakpoint: _src.mobile, settings: "unslick" }],
    }),
      $(".jobs-module .carousel:not(.no-carousel)").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: !0,
        arrows: !1,
        autoplay: !0,
        autoplaySpeed: _src.carousel_autoscroll_speed,
        pauseOnFocus: !0,
        pauseOnHover: !0,
        pauseOnDotsHover: !0,
        responsive: [{ breakpoint: _src.mobile, settings: "unslick" }],
      });
  },
  get_and_set_unique_class: function (e, i, t) {
    var o,
      n = "from-top-" + e;
    return $(i).find(t).addClass(n), n;
  },
  get_new_top_value: function (e, i) {
    var t = $(e).find(i)[0],
      o = window
        .getComputedStyle(t, ":after")
        .getPropertyValue("border-top-width")
        .split(" ")[0],
      n = o.substring(0, o.length - 2),
      s,
      a;
    $(e).hasClass("larger-style")
      ? (s =
          ($(e).height() - $(e).find(".left").outerHeight()) / 2 +
          $(t).find("img").height() / 2 -
          n)
      : (s = $(e).outerHeight() / 2 - n);
    return s;
  },
  set_notch_heights: function () {
    $(".case-study-module").length &&
      $(".case-study-module").each(function (e, i) {
        var t = _src.get_and_set_unique_class(e, i, ".right"),
          o = _src.get_new_top_value(i, ".right");
        $(
          "<style>.case-study-module ." +
            t +
            ".right:after { top: " +
            o +
            "px !important; }</style>"
        ).appendTo("head");
      }),
      $(".text-left-image-right-module").length &&
        $(".text-left-image-right-module").each(function (e, i) {
          var t = _src.get_and_set_unique_class(e, i, ".right"),
            o = _src.get_new_top_value(i, ".right");
          $(
            "<style>.text-left-image-right-module ." +
              t +
              ".right:after { top: " +
              o +
              "px !important; }</style>"
          ).appendTo("head");
        });
  },
  set_arrow_size_and_position: function () {
    if ($(".subpage-feature-module .has-arrow").length) {
      var e = $(".subpage-feature-module .has-arrow"),
        i = $(".subpage-feature-module .has-arrow .arrow"),
        t = window.getComputedStyle(i[0], ":after"),
        o = $(".subpage-feature-module .has-arrow h2").height(),
        n = e.width(),
        s = $(".subpage-feature-module .has-arrow h2.left").width(),
        a = $(".subpage-feature-module .has-arrow h2.right").width(),
        r = t.getPropertyValue("border-top-width").split(" ")[0],
        l,
        d = n - s - a - Number(r.substr(0, r.length - 2)) - 20,
        c = e.css("padding-left"),
        u,
        p = Number(c.substring(0, c.length - 2)) + s + 12;
      _src.window_width >= 1175
        ? (o -= 20)
        : _src.window_width > 1024 && _src.window_width < 1175
        ? (o -= 12)
        : _src.window_width > 550 && _src.window_width <= 1024
        ? ((o -= 6), (p -= 4))
        : _src.window_width <= 550 && (p -= 6),
        i.css("left", p),
        i.css("width", d),
        i.css("height", o);
    }
  },
  scroll_page: function (e) {
    $("html, body").animate({ scrollTop: e + "px" });
  },
  validate_email: function (e) {
    var i;
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
      e
    );
  },
  handle_location_functionality: function () {
    "" != _src.continent_code &&
      ("EU" != _src.continent_code
        ? ("function" == typeof _init_gtm && _init_gtm(),
          void 0 === Cookies.get(_src.non_eu_cookie_banner_dismissed_key) &&
            ($("#non-eu-cookie-banner").show(),
            $("body").addClass("cookie-banner-visible"),
            $("#hide-non-eu-cookie-banner").click(function (e) {
              e.preventDefault(),
                $("#non-eu-cookie-banner").hide(),
                $("body").removeClass("cookie-banner-visible"),
                Cookies.set(_src.non_eu_cookie_banner_dismissed_key, 1, {
                  expires: _src.cookie_expiration_in_days,
                });
            })))
        : void 0 === Cookies.get(_src.eu_cookie_banner_dismissed_key) &&
          (void 0 === Cookies.get(_src.eu_cookie_consent_key)
            ? ($("#eu-cookie-banner").show(),
              $("body").addClass("cookie-banner-visible"),
              $("#agree-to-eu-cookie-banner").click(function (e) {
                e.preventDefault(),
                  $("#eu-cookie-banner").hide(),
                  $("body").removeClass("cookie-banner-visible"),
                  Cookies.set(_src.eu_cookie_consent_key, 1, {
                    expires: _src.cookie_expiration_in_days,
                  }),
                  "function" == typeof _init_gtm && _init_gtm();
              }),
              $("#hide-eu-cookie-banner").click(function (e) {
                e.preventDefault(),
                  $("#eu-cookie-banner").hide(),
                  $("body").removeClass("cookie-banner-visible"),
                  Cookies.set(_src.eu_cookie_banner_dismissed_key, 1, {
                    expires: _src.cookie_expiration_in_days,
                  });
              }))
            : "function" == typeof _init_gtm && _init_gtm()));
  },
  init_location: function () {
    (_src.continent_code = Cookies.get(_src.continent_cookie_key)),
      void 0 === _src.continent_code
        ? $.post(
            _src.ajax_path + "?action=get-ip-location-info",
            { ip: _client_ip_address },
            function (e) {
              (void 0 !== (e = $.parseJSON(e)).success && 0 == e.success) ||
                (null !== e.continent_code &&
                  (Cookies.set(_src.continent_cookie_key, e.continent_code, {
                    expires: _src.cookie_expiration_in_days,
                  }),
                  (_src.continent_code = e.continent_code),
                  _src.handle_location_functionality()));
            }
          )
        : _src.handle_location_functionality();
  },
  show_current_page: function () {
    $("#loading").addClass("invisible"),
      setTimeout(function () {
        $("#loading").addClass("hidden"),
          $("#animsition").removeClass("invisible");
      }, _src.transition);
  },
  bind_global_functionality: function () {
    (_src.header_height = $("#main-header").outerHeight()),
      _src.set_notch_heights(),
      _src.set_arrow_size_and_position(),
      $(document).on("click", "a.local-link", function (e) {
        e.preventDefault();
        var i = $(this).attr("href");
        $("#animsition").addClass("invisible"),
          setTimeout(function () {
            if (($("#animsition").remove(), -1 !== i.indexOf("#module-"))) {
              var e = i.split("#");
              window.location.pathname != e[0] && window.location.href != e[0]
                ? (window.location.href = i)
                : ((window.location.hash = e[1]), location.reload());
            } else window.location.href = i;
          }, _src.transition);
      }),
      $(window).on("load", function () {
        _src.show_current_page(),
          _src.set_notch_heights(),
          _src.set_arrow_size_and_position();
      }),
      setTimeout(function () {
        _src.show_current_page(),
          _src.set_notch_heights(),
          _src.set_arrow_size_and_position();
      }, _src.show_page_timeout),
      _src.runSlick(),
      $(".mobile-nav-toggle").click(function (e) {
        e.preventDefault(),
          $("#main-header").toggleClass("mobile-nav-visible"),
          $("#main-header .sub-menu-show").removeClass("sub-menu-show");
      }),
      $("li.menu-item-has-children").each(function () {
        var e = $(this),
          i = e.find("> a");
        e.append(
          '<span class="mobile-sub-menu-show mobile-nav-sub-menu-toggle mobile-nav-sub-menu-show right"><i class="fas fa-angle-right"></i></span>'
        ),
          e
            .find("ul.sub-menu")
            .prepend(
              '<li class="mobile-sub-menu-show"><span class="mobile-sub-menu-show mobile-nav-sub-menu-toggle mobile-nav-sub-menu-hide"><i class="fas fa-angle-left"></i></span><a href="' +
                i.attr("href") +
                '" class="show-after">' +
                i.text() +
                "</a></li>"
            );
      }),
      $(document).on("click", ".mobile-nav-sub-menu-show", function (e) {
        var i;
        $(this).parent().addClass("sub-menu-show");
      }),
      $(document).on("click", ".mobile-nav-sub-menu-hide", function (e) {
        var i;
        $(this).parents(".sub-menu-show").removeClass("sub-menu-show");
      }),
      $("#main-header li.menu-item-has-children").hover(
        function () {
          _src.window_width > _src.mobile_nav &&
            $("#main-menu-shade").addClass("show-shade");
        },
        function () {
          _src.window_width > _src.mobile_nav &&
            $("#main-menu-shade").removeClass("show-shade");
        }
      ),
      $(document).on("click", ".play-overlay-video-on-click", function (e) {
        var i = $($(this).attr("href")).find("video");
        (_src.overlay_video = i[0]),
          (_src.overlay_video.currentTime = 0),
          _src.overlay_video.play(),
          (_src.overlay_video.onended = function () {
            $(".lity-close").click();
          });
      }),
      $(document).on("lity:close", function (e, i) {
        _src.overlay_video &&
          (_src.overlay_video.pause(),
          (_src.overlay_video.currentTime = 0),
          (_src.overlay_video = !1));
      }),
      $(document).on("click", ".toggle-news-grid-block-wrapper", function (e) {
        e.preventDefault();
        var i = $(this),
          t,
          o = i.parents(".all-news-module").find(".news-grid-block-wrapper"),
          n = $("#" + i.attr("data-target")),
          s;
        i.parent().siblings().find("a").removeClass("active"),
          i.addClass("active"),
          o.removeClass("visible"),
          setTimeout(function () {
            o.removeClass("active"),
              n.addClass("active"),
              setTimeout(function () {
                n.addClass("visible");
              }, _src.transition_fast);
          }, _src.transition_fast);
      }),
      $(document).on("click", ".get-news-by-ajax", function (e) {
        e.preventDefault();
        var i = $(this),
          t = i.attr("data-cat"),
          o = i.attr("data-exclude"),
          n = parseInt(i.attr("data-page")),
          s = i.attr("data-search");
        $.get(
          _src.ajax_path,
          {
            action: "get-news-by-ajax",
            cat: t,
            exclude: o,
            page: n,
            search: s,
          },
          function (e) {
            e = $.parseJSON(e);
            var t = $(e.html);
            t.addClass("invisible");
            var o = i
              .parents(".news-grid-block-wrapper")
              .find(".news-grid-block .news-grid");
            o.append(t),
              setTimeout(function () {
                t.removeClass("invisible");
              }, _src.transition_fast),
              i.attr("data-page", parseInt(i.attr("data-page")) + 1),
              i.attr("data-max-pages", e.max_pages),
              i.attr("data-page") == i.attr("data-max-pages")
                ? i.hide()
                : i.show(),
              o.find(".news-item").length ||
                (o.html(_no_search_results_text), i.hide());
          }
        );
      }),
      $(document).on("keypress", ".search-form .search-input", function (e) {
        13 == e.which && $(this).parent().find(".do-ajax-search").click();
      }),
      $(document).on("click", ".do-ajax-search", function (e) {
        e.preventDefault();
        var i = $(this),
          t = i.parent().find(".search-input");
        if ("" !== t.val()) {
          var o = i.parents(".hero-module").next(".search-results-module"),
            n;
          o.find(".news-grid-block .news-grid").html(""),
            o.find(".tag-heading span").html(t.val()),
            o
              .find(".get-news-by-ajax")
              .attr("data-search", t.val())
              .attr("data-page", 0)
              .click(),
            o.addClass("active"),
            setTimeout(function () {
              o.addClass("visible");
            }, _src.transition_fast);
        }
      }),
      $(document).on("click", ".load-gallery-image", function (e) {
        e.preventDefault();
        var i = $(this);
        if (!i.hasClass("active")) {
          var t = i.attr("data-image"),
            o = i.attr("data-caption"),
            n = i.parents(".gallery").find(".current-gallery-image");
          n.addClass("hidden"),
            i
              .siblings(".load-gallery-image")
              .find(".gallery-thumbnail-image")
              .removeClass("active"),
            i.find(".gallery-thumbnail-image").addClass("active"),
            setTimeout(function () {
              var e = n.find("p"),
                i = n.find("img");
              e.html(o),
                i.attr("src", t).attr("alt", o),
                i.on("load", function () {
                  var t = e.outerHeight(!0) + i.outerHeight(!0);
                  n.css({ height: t }), n.removeClass("hidden");
                });
            }, _src.transition),
            _src.scroll_to_gallery &&
              _src.scroll_page(n.parent().offset().top - _src.standard_padding);
        }
      }),
      $(".gallery-module").each(function () {
        $(this).find(".load-gallery-image").first().click();
      }),
      $(document).on("click", ".toggle-office-region", function (e) {
        e.preventDefault();
        var i = $(this),
          t,
          o = i.parents(".offices-module").find(".office-region"),
          n = $("#" + i.attr("data-region")),
          s;
        i.siblings(".toggle-office-region").removeClass("active"),
          i.addClass("active"),
          o.removeClass("visible"),
          setTimeout(function () {
            o.removeClass("active"),
              n.addClass("active"),
              n.find(".city-block").removeClass("expanded"),
              n.find(".filter-region-countries-by-sub-region:eq(0)").click(),
              setTimeout(function () {
                n.addClass("visible");
              }, _src.transition_fast);
          }, _src.transition_fast);
      }),
      $(".offices-module").each(function () {
        $(this).find(".toggle-office-region").first().click();
      }),
      $(".filter-region-countries-by-sub-region").click(function () {
        var e = $(this),
          i = e.attr("data-sub-region"),
          t = e.parents(".office-region");
        t.find(".filter-region-countries-by-sub-region").removeClass("active"),
          e.addClass("active"),
          t.find(".city-block").removeClass("expanded"),
          "all" == i
            ? t.find(".city-block").show()
            : (t.find(".city-block").hide(),
              t.find(".city-block[data-sub-region='" + i + "']").show());
      }),
      $(".city-block h3.toggle-city-block").click(function (e) {
        e.preventDefault();
        var i = $(this),
          t = !1;
        i.parents(".city-block").hasClass("expanded") && (t = !0),
          i.parents(".offices").find(".city-block").removeClass("expanded"),
          t || i.parents(".city-block").addClass("expanded");
      });
  },
  do_ajax_search: function (e) {
    $.post(
      custom_data.ajaxurl,
      { action: "do_ajax_search", s: e },
      function (e) {}
    );
  },
};
$(document).ready(function () {
  _src.document_init(),
    $(window).on("load", function () {
      _src.window_init();
    });
}),
  (String.prototype.toUpperCaseWords = function () {
    return this.replace(/\w+/g, function (e) {
      return e.charAt(0).toUpperCase() + e.slice(1).toLowerCase();
    });
  }),
  AOS.init({ duration: _src.transition, offset: _src.aos_offset });
//# sourceMappingURL=source.min.js.map

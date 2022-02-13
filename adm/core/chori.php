<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>cPanel File Manager v3</title>


<link type="text/css" rel="stylesheet" href="/cPanel_magic_revision_1333612007/yui/container/assets/container.css" />
<link type="text/css" rel="stylesheet" href="/cPanel_magic_revision_1333612009/yui/menu/assets/menu.css" />
<link type="text/css" rel="stylesheet" href="/cPanel_magic_revision_1333612008/yui/datatable/assets/skins/sam/datatable.css" />
<link type="text/css" rel="stylesheet" href="/cPanel_magic_revision_1333612009/yui/treeview/assets/skins/sam/treeview.css" />
<link type="text/css" rel="stylesheet" href="/cPanel_magic_revision_1349163919/frontend/x3/filemanager/css/tree_styles2_optimized.css" />
<style type="text/css">
/* body { overflow: hidden; } */
.spriteui_img{margin:0;padding:0;background:url("/cPanel_magic_revision_11481383959.0919/frontend/x3/branding/ui_sprites_img_skip_filetype_gif.jpg");}  #ui-aqua-hd-lt{background-position:0 -1px;width:7px;height:22px;}#ui-aqua-hd-rt{background-position:0 -25px;width:7px;height:22px;}

.spriteui_img_trans{position:relative;margin:0;padding:0;top:0px;float:left;background:url("/cPanel_magic_revision_65581516803.5769/frontend/x3/branding/ui_sprites_img_only_filetype_gif.gif");} #ui-accept{background-position:0 -0px;width:16px;height:16px;}#ui-collapse{background-position:0 -16px;width:14px;height:14px;}#ui-expand{background-position:0 -30px;width:14px;height:14px;}#ui-getstart-icon{background-position:0 -44px;width:72px;height:72px;}#ui-homeb{background-position:0 -116px;width:20px;height:19px;}#ui-reject{background-position:0 -135px;width:16px;height:16px;}#ui-start32{background-position:0 -151px;width:32px;height:32px;}#ui-stop32{background-position:0 -183px;width:32px;height:32px;}#ui-x3-hd-close{background-position:0 -215px;width:16px;height:16px;}#ui-x3-hd-closehover{background-position:0 -231px;width:16px;height:16px;}

.spriteui_bg{position:relative;margin:0;padding:0;top:0px;float:left;background:url("/cPanel_magic_revision_13117421952.3511/frontend/x3/branding/ui_sprites_bg_snap_to_smallest_width.png");}#ui-aqua-hd-bg{background-position:0 -0px;width:18px;height:22px;}#ui-button-bg{background-position:0 -322px;width:1px;height:22px;}#ui-button-bg-over{background-position:0 -644px;width:1px;height:22px;}#ui-tbl-bg{background-position:0 -966px;width:18px;height:22px;}#ui-tbl-bg-over{background-position:0 -1288px;width:509px;height:21px;}#ui-bg{background-position:0 -1609px;width:6px;height:640px;}

.spriteheading_compleximg{position:relative;margin:0;padding:0;top:0px;float:left;background:url("/cPanel_magic_revision_99566023315.8558/frontend/x3/branding/heading_sprites_compleximg.jpg") no-repeat;}#heading-top-billboard{background-position:0 -1px;width:742px;height:145px;}

.spriteheading_img{position:relative;margin:0;padding:0;top:0px;float:left;background:url("/cPanel_magic_revision_32191482711.0543/frontend/x3/branding/heading_sprites_img.png");}#heading-help_off{background-position:0 -0px;width:35px;height:37px;}#heading-help_on{background-position:0 -37px;width:35px;height:37px;}#heading-home_off{background-position:0 -74px;width:35px;height:37px;}#heading-home_on{background-position:0 -111px;width:35px;height:37px;}#heading-logout_off{background-position:0 -148px;width:35px;height:37px;}#heading-logout_on{background-position:0 -185px;width:35px;height:37px;}

.spriteheading_bg{position:relative;top:0px;left:0px;margin:0;padding:0;background:url("/cPanel_magic_revision_8806042423.49077/frontend/x3/branding/heading_sprites_bg_snap_to_smallest_width.png") repeat-x;}#heading-bottom_bg{background-position:0 -0px;height:23px;}#heading-top-header-bg{background-position:0 -323px;height:145px;}

.box-expand-control{cursor:pointer;cursor:hand;background:url("/cPanel_magic_revision_65581516803.5769/frontend/x3/branding/ui_sprites_img_only_filetype_gif.gif") repeat;background-position:0 -30px;width:14px;height:14px;}

.box-collapse-control{cursor:pointer;cursor:hand;background:url("/cPanel_magic_revision_65581516803.5769/frontend/x3/branding/ui_sprites_img_only_filetype_gif.gif") repeat;background-position:0 -16px;width:14px;height:14px;}

.create-button, .input-button{background-image:url("/cPanel_magic_revision_13117421952.3511/frontend/x3/branding/ui_sprites_bg_snap_to_smallest_width.png"); background-repeat: repeat-x;}.create-button, .input-button{ background-position:0 -322px;height:22px; }

.create-button:hover, .input-button:hover{background-image:url("/cPanel_magic_revision_13117421952.3511/frontend/x3/branding/ui_sprites_bg_snap_to_smallest_width.png"); background-repeat: repeat-x;}.create-button:hover, .input-button:hover{ background-position:0 -644px;height:22px; }

body{background-image:url("/cPanel_magic_revision_13117421952.3511/frontend/x3/branding/ui_sprites_bg_snap_to_smallest_width.png"); background-repeat: repeat-x;}body{ background-position:0 -1609px;}

h3, h6, #notices h6, #quota-warnings h6, #content-stats h6{background:url("/cPanel_magic_revision_13117421952.3511/frontend/x3/branding/ui_sprites_bg_snap_to_smallest_width.png") bottom repeat-x;}h3, h6, #notices h6, #quota-warnings h6, #content-stats h6{background-position:0 -966px;}
 


.ygtvcontent.ygtvfocus,
.ygtvcontent.ygtvfocus .ygtvlabel {
    background-color: transparent;
}
.ygtvcontent.ygtvfocus {
    outline: 1px dotted #555;
}

.ygtvcontent.selectedNode {
    font-weight: bold;
    background-color: #c0e0e0;
    border-radius: 2px;
}

#waitpanel .bd {
    text-align: center;
    *overflow: visible;   /* IE 7 */
}

#treeContainer a { text-decoration: none; }
.ygtvlabel, .ygtvlabel:link, .ygtvlabel:visited, .ygtvlabel:hover {
    background-color: transparent;

}
.diricon { width: 32px; }
.filelist { font-weight: 900; }

.icon-mail { display:block; height: 20px; padding-left: 20px; background: transparent url(../mimeicons/mail.png) no-repeat; text-decoration:none;}
.icon-publicftp { display:block; height: 20px; padding-left: 20px; background: transparent url(../mimeicons/publicftp.png) no-repeat; text-decoration:none;}
.icon-publichtml { display:block; height: 20px; padding-left: 20px; background: transparent url(../mimeicons/publichtml.png) no-repeat; text-decoration:none;}

.create-button {
font-size:11px;
background-image:none;
background-color:#F0F0F0;
height:26px;
color:#014D5F;
padding:4px 4px;
border:1px outset #F0F0F0;
text-align:center;
}
.create-button:hover {
height:26px;
color:#014D5F;
padding:4px 4px;
background-image:none;
text-decoration:none;
border:1px inset #F0F0F0;
}
.input-button {
height:22px;
color:#014D5F;
background-image:none;
vertical-align:middle;
/*margin:0 0 0 4px;
padding:0 0 4px 0;*/
font:11px Verdana, sans-serif;
border:1px outset #F0F0F0;
}
.input-button:hover {
height:22px;
color:#014D5F;
vertical-align:middle;
background-image:none;
/*margin:0 0 0 4px;*/
text-decoration:none;
font:11px Verdana, sans-serif;
border:1px inset #F0F0F0;
}
</style>
<!--[if gt IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie6.css" />
<script src="js/cssQuery-p.js" type="text/javascript" charset="utf-8"></script>
<script src="js/ie7-standard-p.js" type="text/javascript" charset="utf-8"></script>
<![endif]-->

<script type="text/javascript" src="/cPanel_magic_revision_1333612007/yui-gen/utilities_container/utilities_container.js"></script>
<script type="text/javascript" src="/cPanel_magic_revision_1349163988/cjt/cpanel-all-min.js"></script>
<script type="text/javascript">
//<![CDATA[
(function() {

            var _cldr = {"datetime_format_full":"EEEE d 'de' MMMM 'de' y HH:mm:ss zzzz","datetime_format":"{1} {0}","month_stand_alone_abbreviated":["ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic"],"month_format_wide":["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"date_format_long":"d 'de' MMMM 'de' y","month_stand_alone_wide":["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"datetime_format_short":"dd/MM/yy HH:mm","time_format_long":"HH:mm:ss z","day_stand_alone_wide":["lunes","martes","miércoles","jueves","viernes","sábado","domingo"],"day_format_narrow":["L","M","M","J","V","S","D"],"datetime_format_long":"d 'de' MMMM 'de' y HH:mm:ss z","time_format_medium":"HH:mm:ss","prefers_24_hour_time":1,"day_format_wide":["lunes","martes","miércoles","jueves","viernes","sábado","domingo"],"date_format_short":"dd/MM/yy","time_format_short":"HH:mm","month_format_narrow":["E","F","M","A","M","J","J","A","S","O","N","D"],"date_format_full":"EEEE d 'de' MMMM 'de' y","time_format_full":"HH:mm:ss zzzz","first_day_of_week":"1","am_pm_abbreviated":["a.m.","p.m."],"month_format_abbreviated":["ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic"],"day_stand_alone_narrow":["L","M","M","J","V","S","D"],"date_format_medium":"dd/MM/yyyy","day_stand_alone_abbreviated":["lun","mar","mié","jue","vie","sáb","dom"],"day_format_abbreviated":["lun","mar","mié","jue","vie","sáb","dom"],"month_stand_alone_narrow":["E","F","M","A","M","J","J","A","S","O","N","D"],"datetime_format_medium":"dd/MM/yyyy HH:mm:ss"};
      
CPANEL.cldr = _cldr;

if ( "CalendarNavigator" in YAHOO.widget ) {
    YAHOO.widget.CalendarNavigator.DEFAULT_CONFIG.strings = {"cancel":"Cancelar","year":"Año","submit":"Aceptar","invalidYear":"Invalid year","month":"Mes"};
}

if ( "Calendar" in YAHOO.widget ) {
    //Workaround for YUI 2 issue #2529320 and FB cases 48108 and 48119
    //so that table cell background gradients don't clobber the cell borders
    //in IE<9. This slows down the calendar rendering, so only apply it when
    //necessary.
    //This was not fixed in YUI 2.9.0.
    if ( YAHOO.env.ua.ie && YAHOO.env.ua.ie < 9 ) {
        [   'renderCellDefault',
            'renderCellNotThisMonth',
            'renderBodyCellRestricted',
            'renderOutOfBoundsDate'
        ].forEach( function(type) {
            var original = YAHOO.widget.Calendar.prototype[type];
            YAHOO.widget.Calendar.prototype[type] = function(working_date,cell) {
                var val = original.apply(this,arguments);
                cell.innerHTML = "<div class=\"calcell-liner\">"+cell.innerHTML+"</div>";
            };
        } );
    }

    var yui_localization = {"START_WEEKDAY":"first_day_of_week","STRINGS":{"close":"Cerrar","nextMonth":"Mes próximo","previousMonth":"Mes Anterior"},"WEEKDAYS_MEDIUM":"day_format_abbreviated","WEEKDAYS_1CHAR":"day_stand_alone_narrow","MONTHS_LONG":"month_format_wide","WEEKDAYS_LONG":"day_format_wide","MONTHS_SHORT":"month_format_abbreviated"};
    var DC = YAHOO.widget.Calendar.DEFAULT_CONFIG;
    for (var key in yui_localization) {
        var value = yui_localization[key];
        if (typeof value === "string") value = _cldr[value];
        DC[key].value = value;
    }

        DC.LOCALE_WEEKDAYS.value = "1char";
        ["WEEKDAYS_1CHAR","WEEKDAYS_MEDIUM","WEEKDAYS_LONG"].forEach( function(k) {
        var copy = DC[k].value.slice();  //copy the array
        copy.unshift( copy.pop() );
        DC[k].value = copy;
    } );
//        //fuzzy equality
    if ( DC.START_WEEKDAY.value == 7 ) DC.START_WEEKDAY.value = 0;

    if ( "Calendar_With_Time" in CPANEL.widgets ) {
        CPANEL.widgets.Calendar_With_Time.localization = {
            cldr_time_format_short : _cldr.time_format_short,
            ampm                   : _cldr.am_pm_abbreviated
        };
    }
}

//enclose consecutive occurrences of the same letter with curly braces
//so we can use YAHOO.lang.substitute on it
CPANEL.DateTime = {
    time_format_short: _cldr.time_format_short.replace(/(([hkmsaz])\2*)/gi,"{$1}"),
    date_format_medium: _cldr.date_format_medium.replace(/(([ymdez])\2*)/gi,"{$1}"),
    datetime_format_medium: _cldr.datetime_format_medium.replace(/(([hksaymdez])\2*)/gi,"{$1}")
};
var _format = _cldr.datetime_format
    .replace( '{0}', CPANEL.DateTime.time_format_short )
    .replace( '{1}', CPANEL.DateTime.date_format_medium )
;
var lpad = function(obj,length,padder) {
    if (!padder) padder = "0";
    obj = obj.toString();
    var deficit = length - obj.length;
    var pad = "";
    while (deficit > 0) {
        pad += padder;
        deficit -= padder.length;
    }
    return pad + obj;
};
Date.prototype.toCpLocaleString = function(format_string) {
    var my_date = this;
    var substituter = function(key, value) {
        switch(key) {
            case "yy":
                return my_date.getFullYear().toString().slice(-2);
            case "yyyyy":
                return lpad(my_date.getFullYear(), 5);
            case "y":
            case "yyy":
            case "yyyy":
                return my_date.getFullYear();
            case "MMMM":
                return _cldr.month_format_wide[my_date.getMonth()];
            case "MMM":
                return _cldr.month_format_abbreviated[my_date.getMonth()];
            case "MM":
                return lpad(my_date.getMonth() + 1, 2);
            case "M":
                return String(my_date.getMonth() + 1);
            case "MMMMM":
                return _cldr.month_stand_alone_narrow[my_date.getMonth()];
            case "dd":
                return lpad(my_date.getDate(),2);
            case "d":
                return my_date.getDate();
            case "a":
            case "U":
                var hours = my_date.getHours();
                return _cldr.am_pm_abbreviated[ (hours<12) ? 0 : 1 ];
            case "h":
            case "hh":
                var twelve_hours = my_date.getHours();
                if ( twelve_hours > 12 ) twelve_hours -= 12;
                if ( twelve_hours === 0 ) twelve_hours = 12;
                return ( key === "hh" ) ? lpad(twelve_hours,2) : twelve_hours;
            case "K":
            case "KK":
                var eleven_hours = my_date.getHours();
                if ( eleven_hours > 11 ) eleven_hours -= 12;
                return ( key === "KK" ) ? lpad(eleven_hours,2) : eleven_hours;
            case "H":
                return my_date.getHours();
            case "HH":
                return lpad( my_date.getHours(), 2 );
            case "m":
                return my_date.getMinutes();
            case "mm":
                return lpad( my_date.getMinutes(), 2 );
            case "s":
                return my_date.getSeconds();
            case "ss":
                return lpad( my_date.getHours(), 2 );
            case "EEEE":
                return weekdays_wide[ my_date.getDay() ];
            case "EEE":
            case "EE":
            case "E":
                return weekdays_abbreviated[ my_date.getDay() ];
            case "EEEEE":
                return weekdays_narrow[ my_date.getDay() ];
            default:  //timezone, which we can only represent with GMT+offset
                var seconds = my_date.getTimezoneOffset();
                var hours = (seconds > 0) ? "-" : "+";
                hours += lpad( Math.floor(Math.abs(seconds)/60), 2 );
                var minutes = lpad( seconds%60, 2 );
                return "GMT"+hours+minutes;
        }
    };
    if ( !format_string ) format_string = _format;

    return YAHOO.lang.substitute( format_string, null, substituter );
};
})();

CPANEL.time_selector = function (target_input, opts) {

    opts = (/object/i.test(typeof opts)) ? opts : {}

	// takes a text input line and creates a standard time selector input in its place.
	// the original input is hidden but otherwise left untouched.
	// user-selected values will populate the original input for seamless form handling.
	// The value populated is always hh:mm:00 (military time).
	// The selector currently has no seconds resolution (if one is added in the future
	// it should be triggered as a property in opts so as not to interfere with pages
	// which expect no seconds resolution.
	//
	// opts.stylesheet : string -- defines a url path for an alternate stylesheet to use
	// for selectors on this page.   The first selector construction loads the stylesheet
	// no subsequent stylesheets are loaded -- ever so one style for all time selectors.
	// the default stylesheet is /cjt/css/timeSelector-cpanel.css
	//
	// Construction fails if the target_element does not exist, if the target_element 
	// is not an input tag, is not type text, or if this input already has been turned
	// into a standard time selector.
	//
	// <input type='text' id='startTime' name='start-time' />
	// new CPANEL.time_selector('startTime', {stylesheet: '/cjt/css/mystylesheet.css'})

    var original_object = target_input;

	if ( !(this instanceof CPANEL.time_selector) )
	      return new CPANEL.time_selector( target_input, opts );

	if (/string/i.test(typeof target_input))
		target_input = document.getElementById(target_input);
	
    this.failed = false;

	if (!target_input || !target_input.ownerDocument || !(target_input.ownerDocument === document)) {
		this.failed = 'Invalid DOM object or object ID';
	}
	else if (!/input/i.test(target_input.tagName)) {
		this.failed = 'DOM element must be an input tag'
	}
	else if (!/text|hidden/i.test(target_input.type)) {
		this.failed = 'INPUT tag must declare itself to be type="text"';
	}
	else if (/cpanel-time-selector-container/i.test(target_input.parentNode.className)) {
		this.failed = 'This element has already been turned into a time selector';
	}

	// Failure -- log it if the console is open, otherwise just note the
	// failure and return.
    if (this.failed) {
	   	if (window.console && console.log) {
			console.log('Time Selector Construction: ' + this.failed);
			console.log(original_object);
		}
		return false;
    }

    // Localize AM & PM or 24 hours for locales which don't use AM/PM
	var lang = {}
	lang.am=CPANEL.cldr.am_pm_abbreviated[0];
	lang.pm=CPANEL.cldr.am_pm_abbreviated[1];
	lang.max_hours = (CPANEL.cldr.prefers_24_hour_time) ? 23 : 12;
	lang.min_hours = (CPANEL.cldr.prefers_24_hour_time) ? 0 : 1;

	// Attach the stylesheet.   Another instance of this object may have already done so.
	// if the ID of the automatically attached stylesheet isn't present then it's safe
	// to attach.  Otherwise nothing happens.
	if (!document.getElementById('time-selector-stylesheet')) {
		var newCSS = document.createElement('link');
		newCSS.rel='stylesheet';
		newCSS.type='text/css';
		newCSS.href= (opts.stylesheet) ? opts.stylesheet : '/cjt/css/timeSelector-cpanel.css?';
		newCSS.id='time-selector-stylesheet';
		document.getElementsByTagName('head')[0].appendChild(newCSS);
	}

    // Each instance of this object will increase this counter by one
	// giving us a unique ID for each time selector on a page.
	if (!('id_cache' in this))
		CPANEL.time_selector.prototype.id_cache = 1;


	// This function just adds a 0 in front of numbers less than 10
	// and keeps hours and minutes inside their respective ranges.
	var pretty_numbers = function (num, isHours, direction) {
		    // make sure num is an integer and isn't being
			// treated as an octal.
			num = parseInt(num.toString().replace(/^0+/,''));
			if (isNaN(num))
				num = 0;
			if (direction) {
				num = direction + num;
			}
		    if (isHours) {
			    if (num < lang.min_hours)
					num = lang.max_hours;
				if (num > lang.max_hours)
					num = lang.min_hours;
			}
			else {
				if (num < 0)
					num = 59
				if (num > 59)
					num = 0;
			}
			if (synchronize_original_input)
				synchronize_original_input();
			return (num<10) ? '0' + num : num;
    }
	
	// Try to make sense of the time in the default input field.
	// If Javascript can't make it into a real date, use "now".
	// We expect time to be in its own input field with a default
	// format of hh:mm:ss anything else will probably cause this
	// code to consistently fail.	
	var default_time = new Date();
	if (target_input.value) {
		var init_time = target_input.value.split(':');
		default_time.setHours(init_time[0]);
		default_time.setMinutes(init_time[1]);
		if (/Invalid Date/i.test(default_time))
			default_time = new Date();
	}

	// Convert military time to civilian time and set ampm
	var initial_hours = default_time.getHours();
	var ampm = lang.am;
	if (!CPANEL.cldr.prefers_24_hour_time) {
		if (initial_hours>11) {
			initial_hours -= 12;
			ampm = lang.pm;
		}
		if (!initial_hours)
			initial_hours = 12;
	}
	else {
		ampm = lang.am;
	}
	initial_hours = pretty_numbers(initial_hours);
	var initial_minutes = pretty_numbers(default_time.getMinutes());
	
	// Grab a unique ID for this selector
	var unique_id = this.id_cache;
	CPANEL.time_selector.prototype.id_cache += 1;
	
	// Build the HTML for the time selector.
	// Long classnames and ID are used to reduce namespace collision and make it
	// easier to see what is being styled.
	var container_div = document.createElement('div');
    container_div.className = 'cpanel-time-selector-container group';
    container_div.id = 'cpanel-time-selector-id-' + unique_id;

    var hrs = '';
	hrs += "<div class='cpanel-time-selector-hours-group'>";
    hrs += "<input autocomplete='off' size='2' maxlength='2' type='text' id='cpanel-time-selector-hours-"+unique_id+"' class='cpanel-time-selector-input cpanel-time-selector-hours' value='"+ initial_hours+"' />";
    hrs += "<div class='cpanel-button-group cpanel-hours-button-group'>";
    hrs += "<button type='button' tabindex='-1' id='cpanel-increment-hours-" + unique_id+"' class='cpanel-time-selector-arrow-button cpanel-time-selector-hours-up'></button>";
    hrs += "<button type='button' tabindex='-1' id='cpanel-decrement-hours-" + unique_id+"' class='cpanel-time-selector-arrow-button cpanel-time-selector-hours-down'></button>";
    hrs += "</div>";
    hrs += "</div>";

    var mins = '';
    mins += "<div class='cpanel-time-selector-minutes-group'>";
    mins += "<input autocomplete='off' size='2' maxlength='2' type='text' id='cpanel-time-selector-minutes-"+unique_id+"' value='"+ initial_minutes+"' class='cpanel-time-selector-input cpanel-time-selector-minutes' />";
    mins += "<div class='cpanel-button-group cpanel-minutes-button-group'>";
    mins += "<button type='button' tabindex='-1' id='cpanel-increment-minutes-" + unique_id+"' class='cpanel-time-selector-arrow-button cpanel-time-selector-minutes-up'></button>";
    mins += "<button type='button' tabindex='-1' id='cpanel-decrement-minutes-" + unique_id+"' class='cpanel-time-selector-arrow-button cpanel-time-selector-minutes-down'></button>";
    mins += "</div>";
    mins += "</div>";

    var ampmhtml = '';
    ampmhtml += "<div id='ampm-selector-group-"+ unique_id +"' class='cpanel-time-selector-ampm-group'>";
    ampmhtml += "<button type='button' id='cpanel-am-" + unique_id+"' class='cpanel-time-selector-ampm-button'>"+lang.am+"</button>";
    ampmhtml += "<button type='button' id='cpanel-pm-" + unique_id+"' class='cpanel-time-selector-ampm-button'>"+lang.pm+"</button>";
    ampmhtml += "</div>";

	container_div.innerHTML = YAHOO.lang.substitute( CPANEL.DateTime.time_format_short, null, function(key, value) {
        switch(key) {
            case "a":
            case "aa":
            case "U":
				return ampmhtml;
            case "h":
            case "hh":
            case "K":
            case "KK":
            case "H":
            case "HH":
				return hrs;
            case "m":
            case "mm":
				return mins;
            default:
                return '';
        }
    });

	// Hide the original input field.
    target_input.style.display='none';

	// At the position of the original input field attach the new div and
	// move the hidden original input field under it.
	target_input.parentNode.replaceChild(container_div, target_input);
	container_div.appendChild(target_input);
		
	// Cache some commonly accessed DOM elements.
	var hours_input = document.getElementById('cpanel-time-selector-hours-'+unique_id);
	var minutes_input = document.getElementById('cpanel-time-selector-minutes-' + unique_id);
	var am_button = document.getElementById('cpanel-am-'+unique_id);
	var pm_button = document.getElementById('cpanel-pm-'+unique_id);

	// Setup allowed keystrokes.
	var allowed_keystrokes = {
        37 : true, // left
        39 : true, // right
        8  : true, // backspace
        9  : true, // tab
        13 : true, // enter
        35 : true, // end
        36 : true, // home
        46 : true, // delete
        48 : true, // 0
        49 : true,
        50 : true,
        51 : true,
        52 : true,
        53 : true,
        54 : true,
        55 : true,
        56 : true,
        57 : true, // 9,
        96 : true, // 0, numeric keypad
        97 : true,
        98 : true,
        99 : true,
        100: true,
        101: true,
        102: true,
        103: true,
        104: true,
        105: true  // 9, numeric keypad
	}

	// This method takes the value of the time selectors and populates the original hidden
	// input field.  The replace to strip leading zeros from the hours is to eliminate the
	// chance javascript will treat the number as an octal.
	var synchronize_original_input = function () {
		if (!CPANEL.cldr.prefers_24_hour_time) {
			var military_time = (ampm==lang.pm) ? (parseInt(hours_input.value.replace(/^0/,''))+12) : hours_input.value;
			if (military_time==24 || military_time==12) 
				military_time = (ampm==lang.pm) ? 12 : 0;
		}
		else {
			military_time = hours_input.value;
		}
		target_input.value = military_time + ':' + minutes_input.value + ':00';
	}

	// Setup the events.
	var handle_keydown = function (e) {
		if (/number/i.test(typeof interval_pointer)) 
	   		clearInterval(interval_pointer);
   		interval_pointer = new Date();
		var srcElement = e.srcElement || e.target;
		var is_hours = false;
		if (/hours/i.test(srcElement.id)) {
			is_hours = true;
		}
        if (e.keyCode==38) {
			srcElement.value = pretty_numbers(srcElement.value, is_hours, 1);			
		}
		else if (e.keyCode==40) {
			srcElement.value = pretty_numbers(srcElement.value, is_hours, -1);			
		}
		if (!(e.keyCode in allowed_keystrokes)) {
			YAHOO.util.Event.preventDefault(e);
			YAHOO.util.Event.stopPropagation(e);
			return false;
		}
		
	}
	
	// Focus event, just cache the contents of the input field
	// since we know its good.
	var handle_focus = function (e) {
		var srcElement = e.srcElement || e.target;
		last_valid_value = srcElement.value;
	}
	
	
	// Blur event.  Check the validity and restore the
	// focus value if the entry is not valid (IE 99).
	var handle_blur = function (e) {
		
		var srcElement = e.srcElement || e.target;

		var is_minute = (/minute/i.test(srcElement.id)) ? true : false;
			
		if (srcElement.value != '') {
			var safe_int = parseInt(srcElement.value.replace(/^0/,''));
			if (srcElement.value == '0') {
				srcElement.value = pretty_numbers(last_valid_value, !is_minute );
				return;
			}
			if (isNaN(safe_int)) {
				srcElement.value = pretty_numbers(last_valid_value, !is_minute );
				return;
			}
			var max_value = (is_minute) ? 59 : lang.max_hours;
			if (safe_int<0 || safe_int > max_value) {
                                if (!is_minute) {
                                    var safe_int = parseInt(srcElement.value.replace(/^0/,''));
                                    if (safe_int > 12 && safe_int < 24 && lang.max_hours==12) {
                                        safe_int = safe_int - 12;
                                        ampm = lang.pm;
                                        pm_button.click();
                                    } else {
                                        safe_int=last_valid_value;
                                    }
                                    srcElement.value = pretty_numbers(safe_int, !is_minute );
                                    last_valid_value=safe_int;
                                } else {
                                    srcElement.value = pretty_numbers(last_valid_value, !is_minute );
                                }
                                return;
			}
                        last_valid_value = srcElement.value;
		}
		srcElement.value = pretty_numbers(srcElement.value.replace(/^0/,''), !is_minute);
		synchronize_original_input();
	}
	
	
	var handle_click = function (e) {
		YAHOO.util.Event.preventDefault(e);
		YAHOO.util.Event.stopPropagation(e);		
		if (/number/i.test(typeof interval_pointer)) 
	   		clearInterval(interval_pointer);
   		interval_pointer = new Date();	}

    // an object global that tracks the set_interval pointer for 
	// repeating upticks or downticks when a direction button is
	// held.  When not an interval pointer its a date object so we
	// can wait a few microseconds before instancing another timer.
	var interval_pointer;
	
	var handle_mouseup = function (e) {
		if (/number/i.test(typeof interval_pointer)) 
	   		clearInterval(interval_pointer);
   		interval_pointer = new Date();
	}
	
	var handle_mouseout = function (e) {
		if (/number/i.test(typeof interval_pointer))
	   		clearInterval(interval_pointer);
	    interval_pointer=new Date();
	}
	
	var handle_mousedown = function(e) {
		YAHOO.util.Event.preventDefault(e);
		YAHOO.util.Event.stopPropagation(e);
		// sometimes a mouseup event generates a new mousedown event.
		// So we cache the release event with a date object so we
		// can test to see if enough time has passed for this to be
		// a _real_ mousedown event.
		if (interval_pointer instanceof Date) { 
			var now = new Date();
			if (now.getTime()-interval_pointer.getTime() < 20) return
			interval_pointer=false;
		}
		if (interval_pointer) return;
		
		var srcElement = e.srcElement || e.target;
		var is_hours = false;
		
		var direction = (/increment/i.test(srcElement.id)) ? parseInt(1) : parseInt(-1);
		if (/hours/i.test(srcElement.id)) {
			var source_input = hours_input; // hours_input = cached DOM
			var is_hours = true;
			hours_input.value = pretty_numbers(source_input.value, is_hours, direction)
		}
		else {
			var source_input = minutes_input;
			var is_hours = false;
			minutes_input.value = pretty_numbers(source_input.value, is_hours, direction)
		}
        synchronize_original_input();

        // User is holding the mouse down on an increment/decrement button.
        var first_tick_delay = function () {
			// After 900ms we start the autotick.
	       	source_input.value = pretty_numbers(source_input.value, is_hours, direction);
	       	clearInterval(interval_pointer);
	       	interval_pointer = setInterval( function () {
				source_input.value = pretty_numbers(source_input.value, is_hours, direction);
			}, is_hours ? 300 : 100); // Hours increment at 300ms, Minutes 3x faster at 100ms.
        }
		// We wait almost a second before starting the autotick.
        interval_pointer = setInterval( first_tick_delay, 900);
		return false;
	}
	
	var handle_ampm = function (e) {
		if (!e) return;
		var srcElement = e.srcElement || e.target || e;
		if (/pm/i.test(srcElement.id)) {
			am_button.className = 'cpanel-time-selector-ampm-button cpanelcpanel-time-selector-ampm-unselected cpanel-time-selector-am-unselected';
			pm_button.className = 'cpanel-time-selector-ampm-button cpanel-time-selector-ampm-selected cpanel-time-selector-pm-selected';
			ampm = lang.pm;
		}
		else {
			am_button.className = 'cpanel-time-selector-ampm-button cpanel-time-selector-ampm-selected cpanel-time-selector-am-selected';
			pm_button.className = 'cpanel-time-selector-ampm-button cpanel-time-selector-ampm-unselected cpanel-time-selector-pm-unselected';
			ampm = lang.am;
		}
		synchronize_original_input();
		YAHOO.util.Event.preventDefault(e);
		YAHOO.util.Event.stopPropagation(e);
        return false;
	}
	
	if (ampm == lang.am) {
		handle_ampm(am_button);
	} else
	{
		handle_ampm(pm_button);
	}
	
	synchronize_original_input();
	
	// Setup the events.
	EVENT.on('cpanel-time-selector-hours-'+unique_id, 'keydown', handle_keydown, this);
	EVENT.on('cpanel-time-selector-hours-'+unique_id, 'blur', handle_blur, this);
	EVENT.on('cpanel-time-selector-hours-'+unique_id, 'focus', handle_focus, this);

	EVENT.on('cpanel-time-selector-minutes-'+unique_id, 'keydown', handle_keydown, this);
	EVENT.on('cpanel-time-selector-minutes-'+unique_id, 'blur', handle_blur, this);
	EVENT.on('cpanel-time-selector-minutes-'+unique_id, 'focus', handle_focus, this);
	
	EVENT.on('cpanel-increment-hours-' + unique_id, 'mousedown', handle_mousedown, this);
	EVENT.on('cpanel-increment-hours-' + unique_id, 'mouseout', handle_mouseout, this);
	EVENT.on('cpanel-increment-hours-' + unique_id, 'mouseup', handle_mouseup, this);
	EVENT.on('cpanel-increment-hours-' + unique_id, 'click', handle_mousedown, this);

	EVENT.on('cpanel-decrement-hours-' + unique_id, 'mousedown', handle_mousedown, this);
	EVENT.on('cpanel-decrement-hours-' + unique_id, 'mouseout', handle_mouseout, this);
	EVENT.on('cpanel-decrement-hours-' + unique_id, 'mouseup', handle_mouseup, this);
	EVENT.on('cpanel-decrement-hours-' + unique_id, 'click', handle_mousedown, this);

	EVENT.on('cpanel-increment-minutes-' + unique_id, 'mousedown', handle_mousedown, this);
	EVENT.on('cpanel-increment-minutes-' + unique_id, 'mouseout', handle_mouseout, this);
	EVENT.on('cpanel-increment-minutes-' + unique_id, 'mouseup', handle_mouseup, this);
	EVENT.on('cpanel-increment-minutes-' + unique_id, 'click', handle_mousedown, this);

	EVENT.on('cpanel-decrement-minutes-' + unique_id, 'mousedown', handle_mousedown, this);
	EVENT.on('cpanel-decrement-minutes-' + unique_id, 'mouseout', handle_mouseout, this);
	EVENT.on('cpanel-decrement-minutes-' + unique_id, 'mouseup', handle_mouseup, this);
	EVENT.on('cpanel-decrement-minutes-' + unique_id, 'click', handle_mousedown, this);

	EVENT.on('cpanel-am-' + unique_id, 'click', handle_ampm, this);
	EVENT.on('cpanel-pm-' + unique_id, 'click', handle_ampm, this);

	
}

// Autopopulate any date-hint freeforms
CPANEL.populate_date_hints = function () {
        // Not ready for prime time.
        return;
	var  els = YAHOO.util.Dom.getElementsByClassName('cpanel-date-hint');
	if (els ) {
		for (var i=els.length-1; i >= 0; i--) {
			els[i].innerHTML = YAHOO.lang.substitute( CPANEL.cldr.date_format_short.replace(/(([ymdez])\2*)/gi,"{$1}"), null, function(key, value) {
		        switch(key) {
		            case "yy":
		            case "yyyyy":
		            case "y":
		            case "yyy":
		            case "yyyy":
		                return 'yyyy';
		            case "MMMM":
		            case "MMM":
		            case "MM":
		            case "M":
		            case "MMMMM":
		                return 'mm';
		            case "dd":
		            case "d":
		                return 'dd';
		        }
		    });
		}
	}
}();

//]]>
</script>
<style type="text/css">
.cjt_calendarwithtime {
    text-align: center;
    margin-top: 5px;
}
.cjt_calendarwithtime_hours,
.cjt_calendarwithtime_minutes {
    width: 1.5em;
    text-align: right;
}
</style>

<script type="text/javascript">
if (!self['NVData']) { NVData={}; }
NVData.ignorecharencoding=unescape('');
var LANG = {
    today: "Hoy",
    yesterday: "Ayer",
    dir_empty : "Este directorio está vacío.",
    confirm_download: "Usted está a punto de descargar varios elementos a la vez. ¿Seguro que quieres hacer esto?",
    auto_detect : "( de detección automática )",
    detecting_encoding: "Detecting character encoding for {file_html}…",
    loading   : "Fetching directory contents..."
};
var cpversion = '11.32.7 (build 3)';
var homedir = "\/home\/ctncom";
var workingdir = "\/home\/ctncom";
var showhidden = "1";
var thisTheme = "x3";
var maindomain = "ctn.com.ar";
var current_charset = 'utf-8';
var charmaps = [

    'ansi_x3.110-1983',
    'ansi_x3.4-1968',
    'armscii-8',
    'ascii',
    'asmo_449',
    'big5',
    'big5-eten',
    'big5-hkscs',
    'bs_4730',
    'bs_viewdata',
    'cp10007',
    'cp1125',
    'cp1250',
    'cp1251',
    'cp1252',
    'cp1253',
    'cp1254',
    'cp1255',
    'cp1256',
    'cp1257',
    'cp1258',
    'cp737',
    'cp775',
    'cp936',
    'cp949',
    'csa_z243.4-1985-1',
    'csa_z243.4-1985-2',
    'csa_z243.4-1985-gr',
    'csn_369103',
    'cwi',
    'dec-mcs',
    'din_66003',
    'ds_2089',
    'ebcdic-at-de',
    'ebcdic-at-de-a',
    'ebcdic-ca-fr',
    'ebcdic-dk-no',
    'ebcdic-dk-no-a',
    'ebcdic-es',
    'ebcdic-es-a',
    'ebcdic-es-s',
    'ebcdic-fi-se',
    'ebcdic-fi-se-a',
    'ebcdic-fr',
    'ebcdic-is-friss',
    'ebcdic-it',
    'ebcdic-pt',
    'ebcdic-uk',
    'ebcdic-us',
    'ecma-cyrillic',
    'es',
    'es2',
    'euc-cn',
    'euc-jisx0213',
    'euc-jp',
    'euc-jp-ms',
    'euc-kr',
    'euc-tw',
    'gb18030',
    'gb2312',
    'gb_1988-80',
    'gbk',
    'georgian-academy',
    'georgian-ps',
    'gost_19768-74',
    'greek-ccitt',
    'greek7',
    'greek7-old',
    'gsm03.38',
    'hp-roman8',
    'hz',
    'hz-gb-2312',
    'ibm037',
    'ibm038',
    'ibm1004',
    'ibm1026',
    'ibm1047',
    'ibm1124',
    'ibm1129',
    'ibm1132',
    'ibm1133',
    'ibm1160',
    'ibm1161',
    'ibm1162',
    'ibm1163',
    'ibm1164',
    'ibm256',
    'ibm273',
    'ibm274',
    'ibm275',
    'ibm277',
    'ibm278',
    'ibm280',
    'ibm281',
    'ibm284',
    'ibm285',
    'ibm290',
    'ibm297',
    'ibm420',
    'ibm423',
    'ibm424',
    'ibm437',
    'ibm500',
    'ibm850',
    'ibm851',
    'ibm852',
    'ibm855',
    'ibm856',
    'ibm857',
    'ibm860',
    'ibm861',
    'ibm862',
    'ibm863',
    'ibm864',
    'ibm865',
    'ibm866',
    'ibm866nav',
    'ibm868',
    'ibm869',
    'ibm870',
    'ibm871',
    'ibm874',
    'ibm875',
    'ibm880',
    'ibm891',
    'ibm903',
    'ibm904',
    'ibm905',
    'ibm918',
    'ibm922',
    'iec_p27-1',
    'inis',
    'inis-8',
    'inis-cyrillic',
    'invariant',
    'isiri-3342',
    'iso-8859-1',
    'iso-8859-10',
    'iso-8859-11',
    'iso-8859-13',
    'iso-8859-14',
    'iso-8859-15',
    'iso-8859-16',
    'iso-8859-2',
    'iso-8859-3',
    'iso-8859-4',
    'iso-8859-5',
    'iso-8859-6',
    'iso-8859-7',
    'iso-8859-8',
    'iso-8859-9',
    'iso-ir-197',
    'iso-ir-209',
    'iso-ir-90',
    'iso_10367-box',
    'iso_10646',
    'iso_2033-1983',
    'iso_5427',
    'iso_5427-ext',
    'iso_5428',
    'iso_646.basic',
    'iso_646.irv',
    'iso_6937',
    'iso_6937-2-25',
    'iso_6937-2-add',
    'iso_8859-1,gl',
    'iso_8859-supp',
    'it',
    'jis_c6220-1969-jp',
    'jis_c6220-1969-ro',
    'jis_c6229-1984-a',
    'jis_c6229-1984-b',
    'jis_c6229-1984-b-add',
    'jis_c6229-1984-hand',
    'jis_c6229-1984-hand-add',
    'jis_c6229-1984-kana',
    'jis_x0201',
    'johab',
    'jus_i.b1.002',
    'jus_i.b1.003-mac',
    'jus_i.b1.003-serb',
    'koi-8',
    'koi8-r',
    'koi8-t',
    'koi8-u',
    'ks_c_5601',
    'ks_c_5601-1987',
    'ksc5636',
    'latin-greek',
    'latin-greek-1',
    'mac-cyrillic',
    'mac-is',
    'mac-sami',
    'mac-uk',
    'macintosh',
    'msz_7795.3',
    'nats-dano',
    'nats-dano-add',
    'nats-sefi',
    'nats-sefi-add',
    'nc_nc00-10',
    'nextstep',
    'nf_z_62-010',
    'nf_z_62-010_1973',
    'ns_4551-1',
    'ns_4551-2',
    'pt',
    'pt154',
    'pt2',
    'rk1048',
    'sami',
    'sami-ws2',
    'sen_850200_b',
    'sen_850200_c',
    'shift_jis',
    'shift_jisx0213',
    't.101-g2',
    't.61-7bit',
    't.61-8bit',
    'tcvn5712-1',
    'tis-620',
    'tscii',
    'unicode-1-1-utf-7',
    'us-ascii',
    'utf-7',
    'utf-8',
    'utf-8-strict',
    'videotex-suppl',
    'viscii',
    'windows-1251',
    'windows-1252',
    'windows-31j',
    ''
];
charmaps.pop();

    globalhtmledit=1;


var HAS_UNZIP = !!+"1";
</script>

</head>
<body class=" yui-skin-sam" id="index">
		    <div id="logger" style="z-index: 9999; position: absolute;"></div>
<div id="top" class="clear">
	<div id="topbar" class="clear">
		<div id="branding">
			<h1>Fichero de Archivos</h1>
        </div>
        <!-- HIDDEN UNTIL FINISHED ON THE BACK END --><div id="settings" style="display:block;"><a onclick="showPrefs(); return false;" href="javascript:void(0)">Configuraciones</a></div>
		<div class="search"><form style="margin:0;padding:0" onsubmit="return false;">Búsqueda
		<select name="searchdir" id="searchdir">
		<option value="">Todos Sus Archivos</option>
		<option value="public_html">solo public_html</option>
		<option value="$cwd">Directorio Actual</option>
		</select>
        para
        <input type="text" size="20" id="searchbox" class="searchbox" />
        <input type="image" value="go" src="img/go.gif" onclick="dosearch('searchdir','searchbox')" width="22" heigh="22" align="absmiddle" /></form></div>
	</div>
	<div id="topnav" class="clear">
		<ul>
			<li id="action-newfile" onclick="return actionHandler('newfile');"><a href="javascript:void(0)" title="Nuevo Archivo"><img src="img/icons/Document 2 Add.gif" alt="" /><br />Nuevo Archivo</a></li>
			<li id="action-newfolder" onclick="return actionHandler('newfolder');"><a href="javascript:void(0)" title="Nuevo Directorio"><img src="img/icons/Folder 1 Add.gif" alt="" /><br />Nuevo Directorio</a></li>
			<li id="action-copy" onclick="return actionHandler('copy');"><a href="copymove.html" title="Copiar" target="_blank"><img src="img/icons/copyB.gif" alt="" /><br />Copiar</a></li>
			<li id="action-move" onclick="return actionHandler('move');"><a href="copymove.html" title="Mover Archivo" target="_blank"><img src="img/icons/moveB.gif" alt="" /><br />Mover Archivo</a></li>
			<li id="action-upload" onclick="return actionHandler('upload');"><a href="javascript:void(0)" title="Cargar"><img src="img/icons/Folder 1 Down.gif" alt="" /><br />Cargar</a></li>
			<li id="action-download" onclick="return actionHandler('download');"><a href="javascript:void(0)" title="Descargar"><img src="img/icons/download.gif" alt="" /><br />Descargar</a></li>
			<li id="action-delete" onclick="return actionHandler('delete');" class="divider"><a href="javascript:void(0)" title="Borrar"><img src="img/icons/delete.gif" alt="" /><br />Borrar</a></li>
			<li id="action-rename" onclick="return actionHandler('rename');"><a href="javascript:void(0)" title="Renombrar"><img src="img/icons/Rename.gif" alt="" align="absmiddle" /><br />Renombrar</a></li>
			<li id="action-edit" onclick="return actionHandler('edit');"><a href="javascript:void(0)" title="Editar"><img src="img/icons/Document 2 Edit 2.gif" alt="" align="absmiddle"/><br />Editar</a></li>
			<li id="action-codeedit" onclick="return actionHandler('codeedit');"><a href="javascript:void(0)" title="Editor de Código"><img src="img/icons/codeEditorB.gif" alt="" /><br />Editor de Código</a></li>
			<li id="action-htmledit" onclick="return actionHandler('htmledit');"><a href="javascript:void(0)" title="Editor de HTML"><img src="img/icons/html-edit.gif" alt="" /><br />Editor de HTML</a></li>
			<li id="action-chmod" onclick="return actionHandler('chmod');"><a href="javascript:void(0)" title="Cambiar los Permisos"><img src="img/icons/change-permissions.gif" alt="" /><br />Cambiar los Permisos</a></li>
			<li class="divider" id="action-view" onclick="return actionHandler('view');"><a href="javascript:void(0)" title="Ver"><img src="img/icons/Search.gif" alt="" /><br />Ver</a></li>
			<li id="action-extract" onclick="return actionHandler('extract');"><a href="javascript:void(0)" title="Extraer"><img src="img/icons/extract.gif" alt="" /><br />Extraer</a></li>
			<li id="action-compress" onclick="return actionHandler('compress');"><a href="javascript:void(0)" title="Comprimir"><img src="img/icons/compress.gif" alt="" /><br />Comprimir</a></li>
		</ul>
	</div>
	<div id="midtoolbar" class="clear">
		<div class="path">
			<img alt="" src="../images/homeb.gif" style="vertical-align:text-bottom" />/<input id="location" type="text" value="" />
			<input type="button" value="Ir" onclick="dirnav();" />
		</div>
		<div id="srtoolbar">
			<ul>
				<li id="action-home" onclick="return actionHandler('home');"><a href="javascript:void(0)"><img src="img/icons/Home 2.gif" alt="home" /><br />Home</a></li>
				<li id="action-navup" onclick="return actionHandler('navup');"><a href="javascript:void(0)"><img src="img/icons/upone.gif" alt="Up One" /><br />Subir un nivel</a></li>
				<li id="action-navback" onclick="return actionHandler('navback');"><a href="javascript:void(0)"><img src="img/icons/Navigation Arrow Back.gif" alt="back" /><br />Regresar</a></li>
				<li id="action-navnext" onclick="return actionHandler('navnext');"><a href="javascript:void(0)"><img src="img/icons/Forward.gif" alt="back" /><br />Adelantar</a></li>
				<li id="action-refresh" onclick="return actionHandler('refresh');"><a href="javascript:void(0)"><img src="img/icons/reload_256x256.gif" alt="reload" /><br />Recargar</a></li>
				<li id="action-selectall" onclick="return actionHandler('selectall');"><a href="javascript:void(0)"><img src="img/icons/selectall.gif" alt="" /><br />Seleccionar todo</a></li>
				<li id="action-unselectall" onclick="return actionHandler('unselectall');"><a href="javascript:void(0)"><img src="img/icons/unselect.gif" alt="" /><br />Unseleccionar todo</a></li>
			</ul>
		</div>
	</div>
</div>
	
<div id="subleft">
	<div id="main">
 		<div id="content">
    	<form name="mainForm" action="javscript:;">
			<div class="newsItem">
				<div id="expandcontractdiv" class="clear">
					<ul>
						<li><a href="javascript:RootFileTree.collapseAll()"><img src="img/icons/collapse.gif" alt="" /> Colapsar Todo</a></li>
					</ul>
				</div>
	  			<div id="treeScroller">
                    <div style="text-decoration: none; " id="treeContainer"></div>
                </div>			
</div>
		</form>
  		</div>
      <div id="footerContainer">
        <div id="footer">
          <p>&nbsp;</p>
        </div>
      </div>
    </div>	
</div>

<div id="subright">
	<div id="filesarea">
	</div>
</div>
<div style="display:none;" id="extract">
    <div class="hd">
        <div class="lt"></div>
        <span>Extraer</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="extract-filecontent">
 
<h4>Extraer</h4>
<form>
<div><label for="extractfilepath">Ponga el ruta que deseas extraer <div id="extract-filelist"></div> a (si un directorio que no existe va a ser creado, y el archive extraído en el directorio nuevo) y presiona "Extract":
</label> </div>
<img alt="" src="../images/homeb.gif" /> <input style="width: 80%;"  type="text" name="extractfilepath" id="extractfilepath" value="/path/to/location/" />

</form>
</div>



    </div>
    <div class="ft"></div>
</div>

</div>
<div style="display:none;" id="textedit">
    <div class="hd">
        <div class="lt"></div>
        <span>Editor de texto</span>
        <div class="rt"> </div>
   </div>
<div class="bd">

    <div class="filecontent" id="textedit-filecontent">
<form method="post" action="dotextedit.html">
<h4>Editor de texto</h4>
<div style="border: 1px solid black; margin 3px; padding: 5px; background-color: #fff6cf; color: #7A6A38; border-color: #E6E08C">
<strong>Copia de seguridad del archivo original</strong> antes de la conversión de conjuntos de caracteres, ya que esta acción puede producir resultados inesperados.
</div>
<br/>
<div>

    <label for="textedit-file">
       Estará editando:
            <div id="textedit-filelist"></div>
    </label> 

</div>
<br />
<br />
<p>
<b>Si la codificación no son importantes para usted, porque usted sólo va a trabajar con los idiomas occidentales inglés u otros, puede desactivar este cuadro de diálogo haciendo clic aquí:
</b>
    <span class="button-group">
        <button style="margin-top: 15px" type="button" onclick="disableEncodings('textedit');">Deshabilitar verificación de codificación</button>

    </span>
<br />
<br />
Por favor, seleccione la codificación de caracteres a usar cuando se abre este archivo:
<select id="textedit-charset" name="charset"></select><br /><br/>
      <a href="#" onclick="
         document.getElementById('textslider').style.display = (document.getElementById('textslider').style.display=='block') ? 'none' : 'block';
         return false;
      ">Toggle Help…</a>
      <div style="text-align:justify; padding-left: 10px;display:none" id="textslider" align="justify" >
                    <br />
                    En el menú desplegable, seleccione la codificación con la que se creó el archivo.
                    <strong>Importante</strong>: Selección de la codificación inicial equivocada puede dañar el archivo.<br/>
                    <br />                    
                    Si no está seguro de la codificación correcta, aquí hay algunos consejos:
                    <ul>
                       <li>Si usted está usando un lenguaje de Europa Occidental como el Inglés, español o francés sin ningún tipo de caracteres especiales, seleccione ISO-8859-1.
                       <li>Si usted está usando un lenguaje no-occidental, o si tiene caracteres especiales que no están codificados en HTML en el archivo, seleccione UTF-8.
                       <li>Puede que haya seleccionado la codificación incorrecta si el archivo aparece con el texto siguiente:
                           <img src="../images/encoding_lang_broken.png" align="absmiddle">
                           <strong>Si esto sucede, inmediatamente cancelar la edición y seleccione la codificación correcta.
                           </strong> No guarde el archivo, lo que puede corromper el texto de forma permanente.
                    <ul>
      </div>
<input type="hidden" name="dir" id="textedit-dir" />
<input type="hidden" name="file" id="textedit-file" />
</p>
</div>
</form>

</div>
    <div class="ft"></div>

</div>

<script type="text/javascript">
function calcperm() {
        document.fmode.u.value = 0;
        if (document.fmode.ur.checked) {
                document.fmode.u.value = document.fmode.u.value * 1 + document.fmode.ur.value * 1;
        }
        if (document.fmode.uw.checked) {
                document.fmode.u.value = document.fmode.u.value * 1 + document.fmode.uw.value * 1;
        }
        if (document.fmode.ux.checked) {
                document.fmode.u.value = document.fmode.u.value * 1 + document.fmode.ux.value * 1;
        }
        document.fmode.g.value = 0;
        if (document.fmode.gr.checked) {
                document.fmode.g.value = document.fmode.g.value * 1 + document.fmode.gr.value * 1;
        }
        if (document.fmode.gw.checked) {
                document.fmode.g.value = document.fmode.g.value * 1 + document.fmode.gw.value * 1;
        }
        if (document.fmode.gx.checked) {
                document.fmode.g.value = document.fmode.g.value * 1 + document.fmode.gx.value * 1;
        }
        document.fmode.w.value = 0;
        if (document.fmode.wr.checked) {
                document.fmode.w.value = document.fmode.w.value * 1 + document.fmode.wr.value * 1;
        }
        if (document.fmode.ww.checked) {
                document.fmode.w.value = document.fmode.w.value * 1 + document.fmode.ww.value * 1;
        }
        if (document.fmode.wx.checked) {
                document.fmode.w.value = document.fmode.w.value * 1 + document.fmode.wx.value * 1;
        }
}               
</script>

<style type="text/css">
.chmodtbl td {
    padding: auto 2px;
    text-align: center;
}
.chmodtbl td.label {
    padding: 0;
    text-align: left;
}
</style>

<div style="display:none;" id="chmod">
    <div class="hd">
        <div class="lt"></div>
        <span>Cambiar los Permisos</span>

    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="chmod-content">
	<form name="fmode" action="changeperm.html">
	   <div class="chmod_filelist_container">Archivo(s): <div id="chmod-filelist"></div> <input type="hidden" name="file" id="chmod-file" /></div>
	   <table class="sortable chmodtbl" id="chmodtbl" bordercolor="#CCCCCC" border="0" cellpadding="2" cellspacing="2">
          <tr>
    <td class="label"><b>Modo</b></td>
    <td>Usuario</td>
    <td>Grupo</td>
    <td>Mundo</td>
</tr>
<tr>
   <td class="label">Leer</td>

   <td><input  type="checkbox" name="ur" value="4" onclick="calcperm();" /></td>
   <td><input  type="checkbox" name="gr" value="4" onclick="calcperm();" /></td>
   <td><input  type="checkbox" name="wr" value="4" onclick="calcperm();" /></td>
</tr>
<tr>
    <td class="label">Escribir</td>
    <td><input  type="checkbox" name="uw" value="2" onclick="calcperm();" /></td>
    <td><input  type="checkbox" name="gw" value="2" onclick="calcperm();" /></td>
    <td><input  type="checkbox" name="ww" value="2" onclick="calcperm();" /></td>

</tr>
<tr>
    <td class="label">Ejecutar</td>
    <td><input  type="checkbox" name="ux" value="1" onclick="calcperm();" /></td>
    <td><input  type="checkbox" name="gx" value="1" onclick="calcperm();" /></td>
    <td><input  type="checkbox" name="wx" value="1" onclick="calcperm();" /></td>
</tr>
<tr>
    <td class="label">Permisos</td>
    <td><input type="text" name="u" size="1" readonly="readonly" /></td>

    <td><input type="text" name="g" size="1" readonly="readonly" /></td>
    <td><input type="text" name="w" size="1" readonly="readonly" /></td>
</tr>           

</table>
	   <br />
	   <input type="hidden" id="chmod-dir" name="dir" value="" />
	</form>
  </div>
</div>
    <div class="ft"></div>
</div>


<div style="display:none;" id="prefs">
    <div class="hd">
        <div class="lt"></div>
        <span>Preferencias</span>

    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="prefs-content">
	<form name="prefsform" action="setprefs.html">
		<!-- Hidden files should be a preference also<input  onclick="save_optionselect_form();" type="checkbox" id="optionselect_showhidden" name="showhidden" value="1"> Mostrar Archivos Escondidos (dotfiles: .ejemplo).<br /> -->
        <label><input type="checkbox" name="ignorecharencoding" id="prefs-ignorecharencoding" > Desactivar diálogos de verificación de codificación de caracteres</label>
		
    </form>
  </div>
</div>
    <div class="ft"></div>
</div>

<div style="display:none;" id="copy">
    <div class="hd">
        <div class="lt"></div>
        <span>Copiar</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="copy-filecontent">
 
<h4>Copiar</h4>
<p>Para copiar archivos:</p>
	<ol>
	<li>Selecciona los archivos que desea copiar dándole in clic en su propio icono.</li>
	<li>Sujeta la tecla de "control" y arrastra los archivos a el directorio de la izquierda en donde desea copiarlos.</li>
	</ol>
<div id="copy-hasfilelist" style="display:none;">
<p>O</p>
<form>
<div><label for="copy-file-path">
	Ponga el ruta que desea copiar 
	<div id="copy-filelist"></div> 
	&nbsp; a y presiona "Copiar":
</label> </div>

<img alt="" src="../images/homeb.gif" /> <input style="width: 80%;"  type="text" name="copyfilepath" id="copy-file-path" value="/path/to/location/" />

</form>
</div>



    </div>
</div>
    <div class="ft"></div>

</div>
<div style="display:none;" id="codeedit">
    <div class="hd">
        <div class="lt"></div>
        <span>Editor de código</span>
        <div class="rt"> </div>
   </div>
<div class="bd">
    <div class="filecontent" id="codeedit-filecontent">
<form method="post" action="docodeedit.html">
<h4>Editor de código</h4>
<div style="border: 1px solid black; margin 3px; padding: 5px; background-color: #fff6cf; color: #7A6A38; border-color: #E6E08C">
<strong>Copia de seguridad del archivo original</strong> antes de la conversión de conjuntos de caracteres, ya que esta acción puede producir resultados inesperados.
</div>
<br/>

<div>

    <label for="codeedit-file">
       Estará editando:
            <div id="codeedit-filelist"></div>
    </label>

</div>
<br />
<br />
<p>
<b>Si la codificación no son importantes para usted, porque usted sólo va a trabajar con los idiomas occidentales inglés u otros, puede desactivar este cuadro de diálogo haciendo clic aquí:
</b>
        <span class="button-group">
            <button style="margin-top: 15px" type="button" onclick="disableEncodings('codeedit');">Deshabilitar verificación de codificación</button>
        </span>

<br />
<br />
Por favor, seleccione la codificación de caracteres a usar cuando se abre este archivo:
 <select id="codeedit-charset" name="charset"></select><br /><br/>
      <a href="#" onclick="
         document.getElementById('slider').style.display = (document.getElementById('slider').style.display=='block') ? 'none' : 'block';
         return false;
      ">Toggle Help…</a>
      <div style="text-align:justify; padding-left: 10px;display:none" id="slider" align="justify" >
          <br />
          En el menú desplegable, seleccione la codificación con la que se creó el archivo.
          <strong>Importante</strong>: Selección de la codificación inicial equivocada puede dañar el archivo.<br/>
          <br />
          Si no está seguro de la codificación correcta, aquí hay algunos consejos:
          <ul>
              <li>Si usted está usando un lenguaje de Europa Occidental como el Inglés, español o francés sin ningún tipo de caracteres especiales, seleccione ISO-8859-1.
              <li>Si usted está usando un lenguaje no-occidental, o si tiene caracteres especiales que no están codificados en HTML en el archivo, seleccione UTF-8.
              <li>Puede que haya seleccionado la codificación incorrecta si el archivo aparece con el texto siguiente:
                  <img src="../images/encoding_lang_broken.png" align="absmiddle">
                  <strong>Si esto sucede, inmediatamente cancelar la edición y seleccione la codificación correcta.
                  </strong> No guarde el archivo, lo que puede corromper el texto de forma permanente.
          <ul>
      </div>
<input type="hidden" name="dir" id="codeedit-dir" />
<input type="hidden" name="file" id="codeedit-file" />
</p>
</div>
</form>

</div>
    <div class="ft"></div>

</div>

<div style="display:none;" id="search-results">
    <div class="hd">
        <div class="lt"></div>
        <span>Resultados de búsqueda de <div id="search-for" style="display:inline;"></div></span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="search-results-foldercontent">
<form action="domkdir.html">
Dale un double clic a el archivo o directorio para abrir el directorio (o el directorio en donde el archivo esta contenido)
<div id="search-results-div" style="width:470px; height:300px;">
<table id="search-results-tbl" border="0" cellspacing="5" cellpadding="5">
    <thead>
	<tr>
		<th>&nbsp;</th>
		<th>Path</th>
	</tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</form>

 </div>
<br />
Nota: Limitado a 250 Resultados.
</div>
    <div class="ft"></div>

</div>
<div style="display:none;" id="htmledit">
    <div class="hd">
        <div class="lt"></div>
        <span>Editor de HTML</span>
        <div class="rt"> </div>
   </div>
<div class="bd">
    <div class="filecontent" id="htmledit-filecontent">
<form method="post" action="dohtmledit.html">
<h4>Editor de HTML</h4>
<div>

    <label for="htmledit-file">
       Estará editando:
            <div id="htmledit-filelist"></div>
    </label> 

</div>
<br />
<br />
<p>
<select style="display:none;" name="basedir" id="htmledit-basedir"></select>
    Por favor seleccione el URL desde donde este archivo será controlado: <select name="url" id="htmledit-urls" onchange="document.getElementById('htmledit-basedir').selectedIndex =this.selectedIndex;"></select>
    <br />
         <div style="text-align:justify; padding-left: 10px;" align="justify">  Este URL será utilizado para garantizar que los vínculos de la página HTML que está editando, apunten al lugar apropiado. </div>

<br />
<div id="htmledit-encodings">
       Si la codificación no es importante para usted, debido a que solamente utilizará el idioma inglés u otros idiomas occidentales, puede desactivar este diálogo haciendo clic aquí:
        <input type="button" onclick="disableEncodings('htmledit');" class="input-button" value="Deshabilitar verificación de codificación">
<br />
<br />
Por favor seleccione la codificación de caracteres con la cual abrir este archivo: <select id="htmledit-charset" name="charset"></select><br />
      <div style="text-align:justify; padding-left: 10px;" align="justify"> Se intentó auto detectar la codificación de este archivo. Sin embargo, este no es un proceso totalmente seguro, debido a que algunos archivos se mostrarán apropiadamente con múltiples codificaciones diferentes. Debe seleccionar la codificación con la cual este archivo fue originalmente creado. Es muy importante que seleccione la codificación apropiada; guardar su archivo con la codificación errónea, puede producir la corrupción del texto. Si está utilizando un idioma occidental europeo como inglés, español o francés sin ningún carácter especial, puede asumir con seguridad &quot;ISO-8859-1&quot; que funcionará correctamente. Se está utilizando un idioma no occidental, o si posee caracteres especiales que no están codificados en el HTML en su archivo, debe ingresar &quot;utf-8&quot;. Si su archivo aparece con texto como el siguiente: <img src="../images/encoding_lang_broken.png" align="absmiddle"><img src="../images/encoding_lang_broken2.png" align="absmiddle"> o
 <img src="../images/encoding_special_broken.png" align="absmiddle"> Tal vez seleccionó la codificación incorrecta. Si esto sucede, debe inmediatamente abortar la edición, y seleccionar la codificación correcta. No debe guardar este archivo, esta acción probablemente corrompa el texto de forma permanente.
    </div>
</div>
<input type="hidden" name="dir" id="htmledit-dir" />
<input type="hidden" name="file" id="htmledit-file" />
</p>
</div>
</form>

</div>
    <div class="ft"></div>

</div>

<div style="display:none;" id="move">
    <div class="hd">
        <div class="lt"></div>
        <span>Mover</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="move-filecontent">

<h4>Mover</h4>
<p>Para mover archivos:</p>
	<ol>
	<li>Seleccione los archivos que desea mover dandole un click en su icono.</li>
	<li>Arrastre los archivos a el folder en su izquierda a donde los quiera move</li>
	</ol>

<div id="move-hasfilelist" style="display: none;">
<p>O</p>
<form action="javascript:void(0)">
<div><label for="move-file-path">Tecle el ruta a donde desea moverlos <div id="move-filelist"></div> &nbsp; a y presione "Move":
</label> </div>
<p><img alt="home" class="home_dir" src="../images/homeb.gif" />/&nbsp;<input style="width: 80%;"  type="text" name="movefilepath" id="move-file-path" value="/path/to/location/" /> 
</p>
</form>
</div>

    </div>
</div>
    <div class="ft"></div>

</div>
<div style="display:none;" id="newfolder">
    <div class="hd">
        <div class="lt"></div>
        <span>Nuevo Directorio</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="newfolder-foldercontent">
<form action="/json-api/cpanel">
<input type="hidden" name="cpanel_jsonapi_version" value="2" />
<input type="hidden" name="cpanel_jsonapi_module" value="Fileman" />
<input type="hidden" name="cpanel_jsonapi_func" value="mkdir" />
<h4>Crear un Nuevo Directorio</h4>
<p><label for="newdir">Nombre del Directorio Nuevo:</label> <input type="text" name="name" id="new-folder-name" /></p>
<p>
<label for="new-folder-path">El Nuevo Directorio va a ser creado en:</label> <br />
<img alt="" src="../images/homeb.gif" width="15" height="15" /> <input style="width: 80%;"  type="text" name="path" id="new-folder-path" value="/path/to/location/" />
</p>
</form>

 </div>
</div>
    <div class="ft"></div>

</div>

<div style="display:none;" id="encodingsdisabled">
    <div class="hd">
        <div class="lt"></div>
        <span>Verificación de codificación de caracteres desactivada</span>

    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="encodingsdisabled-content">
	<form name="encodingsdisabledform" action="setencodingsdisabled.html">
Intentaremos detectar automáticamente la codificación de caracteres, y ya no la verificaremos con usted.  Si necesita cambiar esta configuración en el futuro, utilice el vínculo "Configuraciones", o la opción "Restablecer configuraciones de interface" en la pantalla principal.
    </form>
  </div>
</div>
    <div class="ft"></div>
</div>

<div style="display:none;" id="compress">
    <div class="hd">
        <div class="lt"></div>
        <span>Comprimir</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="compress-filecontent">
 
<h4>Comprimir</h4>
<form name="compressform">
<div id="compress-type">
<b> Tipo de Compresión: </b> <br />
<div style="display:none;" id="compress-singlefile">

<input onclick="changeCompression();" type="radio" name="compresstype" value="zip"> Archivo Zip <br />

<input onclick="changeCompression();"  type="radio" name="compresstype" value="gz"> Archivo GZip <br />
<input onclick="changeCompression();"  type="radio" name="compresstype" value="bz2"> Archivo Bzip2 <br />
</div>
<div style="display:none;" id="compress-multifile">

<input onclick="changeCompression();"  type="radio" name="compresstype" value="zip"> Archivo Zip <br />

<input onclick="changeCompression();"  type="radio" name="compresstype" value="tar"> Archivo Tar <br />
<input onclick="changeCompression();"  type="radio" name="compresstype" value="tar.gz"> Archivo GZiped <br />
<input onclick="changeCompression();"  type="radio" name="compresstype" value="tar.bz2"> Archivo Bzip2ed Tar <br />
</div>
</div>
<div><label for="compressfilepath">Pon el nombre del archivo comprimido para almacenarlo/grabarlo <div id="compress-filelist"></div> a y presiona "Comprimir":
</label> </div>
<p><img alt="" src="../images/homeb.gif" /> <input style="width: 80%;"  type="text" name="compressfilepath" id="compressfilepath" value="/path/to/location/" />

</form>
</div>


</p>   

    </div>
    <div class="ft"></div>
</div>

</div>
<div style="display:none;" id="delete">
    <div class="hd">
        <div class="lt"></div>
        <span>Borrar</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="delete-filecontent">
 
<h4>Borrar</h4>
<form>
Esta seguro que quiere borrar:
<div id="delete-filelist"></div>?
</form>


    </div>
</div>
    <div class="ft"></div>

</div>

<div style="display:none;" id="newfile">
    <div class="hd">
        <div class="lt"></div>
        <span>Nuevo Archivo</span>
        <div class="rt"></div>
    </div>
    <div class="bd">
        <div class="filecontent" id="newfile-filecontent">

        <form action="javascript:void(0)">

<h4>Crear Nuevo Archivo</h4>
<p><label for="new-file-name">Nombre del Nuevo Archivo:</label> <input style="width: 100%;"  type="text" name="name" id="new-file-name" /> (ex: file.txt, file.html, file.php)</p>
<!-- <p>
	<label for="filetype">Seleccione el Tipo de Archivo</label> 
	<select id="filetype" name="template"> 
<option value="Text Document">Text Document</option>
 <option value="HTML Document">HTML Document</option>
 <option value="Perl Script">Perl Script</option>
 <option value="Shell Script">Shell Script</option>
 <option value="Text Document">Text Document</option>

	</select>

</p> -->
<p>
	<label for="new-file-path">El nuevo archivo será creado en:</label> <br />
    <img alt="" src="../images/homeb.gif" width="15" height="15" />/<input style="width: 80%;" type="text" name="path" id="new-file-path" value="/path/to/location/" />
</p>
        </form>
        </div>
    </div>
    <div class="ft"></div>
</div>
<div style="display:none;" id="rename">
    <div class="hd">
        <div class="lt"></div>
        <span>Renombrar</span>
    <div class="rt">
</div></div>
<div class="bd">
    <div class="filecontent" id="rename-filecontent">
<form method="post" action="dorename.html">
<h4>Renombrar</h4>
<span id="rename-dyanmic-hide">
<p>Para renombrar un archivo, simplemente dale un clic a su nombre y ponga el nuevo nombre.</p>
</span>
<div id="rename-hasfile" style="display: none;">
<span id="rename-dyanmic-hide2">
<p>O</p>
</span>
<div><label for="rename-file">Tecle el nuevo nombre para <div id="rename-filelist"></div>&nbsp; aqui</label>: </div>
<p><input type="text" name="newname" id="rename-newfile" style="width: 100%;" />
<input type="hidden" name="dir" id="rename-dir" />
<input type="hidden" name="file" id="rename-file" />
</p>
</div>
</form>

 </div>
</div>
    <div class="ft"></div>

</div>

<div id="copyi" class="zOverlay"><img src="../images/symbol-add.gif"></div>
<div id="filesi" class="zOverlay">1 archivo</div>	
<iframe id="downloadbox" name="downloadbox" src="" style="width:0px;height:0px;border:0"></iframe>
<div class="zOverlay">
    <form id="actionform" action="" target="_blank" method="get">
    <input type="hidden" name="file" id="actionform_file" />
    <input type="hidden" name="fileop" id="actionform_fileop" />
    <input type="hidden" name="dir" id="actionform_dir" />
    <input type="hidden" name="dirop" id="actionform_dirop" />
    <input type="hidden" name="charset" id="actionform_charset" />
    <input type="hidden" name="file_charset" id="actionform_temp_charset" />
    <input type="hidden" name="baseurl" id="actionform_baseurl" />
    <input type="hidden" name="basedir" id="actionform_basedir" />
    </form>
</div>
<div id="select" style="padding:0px;margin:0px;opacity:0.4;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=40);filter=alpha(opacity=40);position:absolute;float:left;z-index:3000;left:1px;top:1px;background-color:#aaf;border: solid 2px #33c;display:none;">&nbsp;</div>

<script type="text/javascript">
   if (typeof LANG === "undefined") {LANG = {};}
   LANG.tooMany = "Sólo se puede editar un archivo a la vez.";
   LANG.tooFew  = "Primero debe seleccionar un archivo para editar.";
   LANG.notValid= "No existe el fichero válido seleccionado. No puede editar directorios o archivos de más de un megabyte. Para editar archivos de gran tamaño, por favor descargue el archivo y utilizar un editor local.";
   LANG.notValidHTML = "No valid file selected.  The file must be HTML and end in .htm or .html.   The file must also not be larger than one megabyte.  You also can not edit directories.";
   LANG.notValidType= "This file does not appear to be a valid file type.  Do you wish to try editing this file anyway?";

   LANG.rename_conflict = "{file} already exists. Please delete or rename the existing file before renaming this file.";
   LANG.chmod_error= "Invalid permission mask.  Must be 4 digits with each digit a value from zero to seven.";
</script>
<script type="text/javascript" src="/cPanel_magic_revision_1333612006/yui-gen/data/data.js"></script>
<script type="text/javascript" src="/cPanel_magic_revision_1346139920/frontend/x3/js/filemanager_optimized.js"></script> 

</body>
</html>
<!-- cPanel [11.32] (pro,attracta) Copyright (c) 2012 cPanel, Inc. Licensed on host.diale.com -->

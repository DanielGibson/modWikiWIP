<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
	<head>

<script type="text/javascript" src="/static/js/analytics.js" ></script>
<link type="text/css" rel="stylesheet" href="/static/css/banner-styles.css"/>




		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Index.php" />
<link rel="shortcut icon" href="/web/20121120061928im_/http://www.modwiki.net/favicon.ico" />
<link title="Creative Commons" type="application/rdf+xml" href="/w/index.php?title=Index.php&amp;action=creativecommons" rel="meta" />
<link rel="copyright" href="http://www.gnu.org/copyleft/fdl.html" />
		<title>Index.php - modwiki</title>
		<style type="text/css" media="screen,projection">/*<![CDATA[*/ @import "/web/20121120061928cs_/http://www.modwiki.net/w/skins/monobook/main.css?9"; /*]]>*/</style>
		<link rel="stylesheet" type="text/css" media="print" href="/web/20121120061928cs_/http://www.modwiki.net/w/skins/common/commonPrint.css" />
		<!--[if lt IE 5.5000]><style type="text/css">@import "/w/skins/monobook/IE50Fixes.css";</style><![endif]-->
		<!--[if IE 5.5000]><style type="text/css">@import "/w/skins/monobook/IE55Fixes.css";</style><![endif]-->
		<!--[if IE 6]><style type="text/css">@import "/w/skins/monobook/IE60Fixes.css";</style><![endif]-->
		<!--[if IE 7]><style type="text/css">@import "/w/skins/monobook/IE70Fixes.css?1";</style><![endif]-->
		<!--[if lt IE 7]><script type="text/javascript" src="/w/skins/common/IEFixes.js"></script>
		<meta http-equiv="imagetoolbar" content="no" /><![endif]-->
		<script type="text/javascript">var skin = 'monobook';var stylepath = '/w/skins';</script>
		<script type="text/javascript" src="/web/20121120061928js_/http://www.modwiki.net/w/skins/common/wikibits.js?1"><!-- wikibits js --></script>
		<script type="text/javascript" src="/web/20121120061928js_/http://www.modwiki.net/w/index.php?title=-&amp;action=raw&amp;gen=js"><!-- site js --></script>
		<style type="text/css">/*<![CDATA[*/
@import "/web/20121120061928cs_/http://www.modwiki.net/w/index.php?title=MediaWiki:Common.css&action=raw&ctype=text/css&smaxage=18000";
@import "/web/20121120061928cs_/http://www.modwiki.net/w/index.php?title=MediaWiki:Monobook.css&action=raw&ctype=text/css&smaxage=18000";
@import "/web/20121120061928cs_/http://www.modwiki.net/w/index.php?title=-&action=raw&gen=css&maxage=18000";
/*]]>*/</style>
		<!-- Head Scripts -->
			</head>
<body  class="ns-0 ltr">
<!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script> if (window.archive_analytics) { window.archive_analytics.values['server_name']="wwwb-app0.us.archive.org";}; </script>

<script type="text/javascript" src="/static/js/disclaim-element.js" ></script>
<script type="text/javascript" src="/static/js/graph-calc.js" ></script>
<script type="text/javascript" src="/static/jflot/jquery.min.js" ></script>
<script type="text/javascript">
//<![CDATA[
var firstDate = 820454400000;
var lastDate = 1420070399999;
var wbPrefix = "/web/";
var wbCurrentUrl = "http:\/\/www.modwiki.net\/wiki\/Index.php";

var curYear = -1;
var curMonth = -1;
var yearCount = 18;
var firstYear = 1996;
var imgWidth = 475;
var yearImgWidth = 25;
var monthImgWidth = 2;
var trackerVal = "none";
var displayDay = "20";
var displayMonth = "Nov";
var displayYear = "2012";
var prettyMonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

function showTrackers(val) {
	if(val == trackerVal) {
		return;
	}
	if(val == "inline") {
		document.getElementById("displayYearEl").style.color = "#ec008c";
		document.getElementById("displayMonthEl").style.color = "#ec008c";
		document.getElementById("displayDayEl").style.color = "#ec008c";		
	} else {
		document.getElementById("displayYearEl").innerHTML = displayYear;
		document.getElementById("displayYearEl").style.color = "#ff0";
		document.getElementById("displayMonthEl").innerHTML = displayMonth;
		document.getElementById("displayMonthEl").style.color = "#ff0";
		document.getElementById("displayDayEl").innerHTML = displayDay;
		document.getElementById("displayDayEl").style.color = "#ff0";
	}
   document.getElementById("wbMouseTrackYearImg").style.display = val;
   document.getElementById("wbMouseTrackMonthImg").style.display = val;
   trackerVal = val;
}
function getElementX2(obj) {
	var thing = jQuery(obj);
	if((thing == undefined) 
			|| (typeof thing == "undefined") 
			|| (typeof thing.offset == "undefined")) {
		return getElementX(obj);
	}
	return Math.round(thing.offset().left);
}
function trackMouseMove(event,element) {

   var eventX = getEventX(event);
   var elementX = getElementX2(element);
   var xOff = eventX - elementX;
	if(xOff < 0) {
		xOff = 0;
	} else if(xOff > imgWidth) {
		xOff = imgWidth;
	}
   var monthOff = xOff % yearImgWidth;

   var year = Math.floor(xOff / yearImgWidth);
	var yearStart = year * yearImgWidth;
   var monthOfYear = Math.floor(monthOff / monthImgWidth);
   if(monthOfYear > 11) {
       monthOfYear = 11;
   }
   // 1 extra border pixel at the left edge of the year:
   var month = (year * 12) + monthOfYear;
   var day = 1;
	if(monthOff % 2 == 1) {
		day = 15;
	}
	var dateString = 
		zeroPad(year + firstYear) + 
		zeroPad(monthOfYear+1,2) +
		zeroPad(day,2) + "000000";

	var monthString = prettyMonths[monthOfYear];
	document.getElementById("displayYearEl").innerHTML = year + 1996;
	document.getElementById("displayMonthEl").innerHTML = monthString;
	// looks too jarring when it changes..
	//document.getElementById("displayDayEl").innerHTML = zeroPad(day,2);

	var url = wbPrefix + dateString + '/' +  wbCurrentUrl;
	document.getElementById('wm-graph-anchor').href = url;

   //document.getElementById("wmtbURL").value="evX("+eventX+") elX("+elementX+") xO("+xOff+") y("+year+") m("+month+") monthOff("+monthOff+") DS("+dateString+") Moy("+monthOfYear+") ms("+monthString+")";
   if(curYear != year) {
       var yrOff = year * yearImgWidth;
       document.getElementById("wbMouseTrackYearImg").style.left = yrOff + "px";
       curYear = year;
   }
   if(curMonth != month) {
       var mtOff = year + (month * monthImgWidth) + 1;
       document.getElementById("wbMouseTrackMonthImg").style.left = mtOff + "px";
       curMonth = month;
   }
}
//]]>
</script>

<style type="text/css">body{margin-top:0!important;padding-top:0!important;min-width:800px!important;}#wm-ipp a:hover{text-decoration:underline!important;}</style>
<div id="wm-ipp" lang="en" class="__wb_banner_div" style="display:none; position:relative;padding:0 5px;min-height:70px;min-width:800px">


<div id="wm-ipp-inside" class="__wb_banner_div" style="position:fixed;padding:0!important;margin:0!important;width:97%;min-width:780px;border:5px solid #000;border-top:none;background-image:url(/static/images/toolbar/wm_tb_bk_trns.png);text-align:center;-moz-box-shadow:1px 1px 3px #333;-webkit-box-shadow:1px 1px 3px #333;box-shadow:1px 1px 3px #333;font-size:11px!important;font-family:'Lucida Grande','Arial',sans-serif!important;">
   <table style="border-collapse:collapse;margin:0;padding:0;width:100%;"><tbody><tr>
   <td style="padding:10px;vertical-align:top;min-width:110px;">
   <a href="/web/" title="Wayback Machine home page" style="background-color:transparent;border:none;"><img src="/static/images/toolbar/wayback-toolbar-logo.png" alt="Wayback Machine" width="110" height="39" border="0"/></a>
   </td>
   <td style="padding:0!important;text-align:center;vertical-align:top;width:100%;">

       <table style="border-collapse:collapse;margin:0 auto;padding:0;width:570px;"><tbody><tr>
       <td style="padding:3px 0;" colspan="2">
       <form target="_top" method="get" action="/web/form-submit.jsp" name="wmtb" id="wmtb" style="margin:0!important;padding:0!important;"><input type="text" name="url" id="wmtbURL" value="http://www.modwiki.net/wiki/Index.php" style="width:400px;font-size:11px;font-family:'Lucida Grande','Arial',sans-serif;" onfocus="javascript:this.focus();this.select();" /><input type="hidden" name="type" value="replay" /><input type="hidden" name="date" value="20121120061928" /><input type="submit" value="Go" style="font-size:11px;font-family:'Lucida Grande','Arial',sans-serif;margin-left:5px;width: inherit !important" /><span id="wm_tb_options" style="display:block;"></span></form>
       </td>
       <td style="vertical-align:bottom;padding:5px 0 0 0!important;" rowspan="2">
           <table style="border-collapse:collapse;width:110px;color:#99a;font-family:'Helvetica','Lucida Grande','Arial',sans-serif;"><tbody>
			
           <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
           <tr style="width:110px;height:16px;font-size:10px!important;">
           	<td style="padding-right:9px;font-size:11px!important;font-weight:bold;text-transform:uppercase;text-align:right;white-space:nowrap;overflow:visible;" nowrap="nowrap">
               
		                <a href="/web/20121020030518/http://www.modwiki.net/wiki/Index.php" style="text-decoration:none;color:#33f;font-weight:bold;background-color:transparent;border:none;" title="20 Oct 2012"><strong>OCT</strong></a>
		                
               </td>
               <td id="displayMonthEl" style="background:#000;color:#ff0;font-size:11px!important;font-weight:bold;text-transform:uppercase;width:34px;height:15px;padding-top:1px;text-align:center;" title="You are here: 6:19:28 Nov 20, 2012">NOV</td>
				<td style="padding-left:9px;font-size:11px!important;font-weight:bold;text-transform:uppercase;white-space:nowrap;overflow:visible;" nowrap="nowrap">
               
		                <a href="/web/20121221052454/http://www.modwiki.net/wiki/index.php?" style="text-decoration:none;color:#33f;font-weight:bold;background-color:transparent;border:none;" title="21 Dec 2012"><strong>DEC</strong></a>
		                
               </td>
           </tr>

           <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
           <tr>
               <td style="padding-right:9px;white-space:nowrap;overflow:visible;text-align:right!important;vertical-align:middle!important;" nowrap="nowrap">
               
		                <a href="/web/20121020030518/http://www.modwiki.net/wiki/Index.php" title="3:05:18 Oct 20, 2012" style="background-color:transparent;border:none;"><img src="/static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0" /></a>
		                
               </td>
               <td id="displayDayEl" style="background:#000;color:#ff0;width:34px;height:24px;padding:2px 0 0 0;text-align:center;font-size:24px;font-weight: bold;" title="You are here: 6:19:28 Nov 20, 2012">20</td>
				<td style="padding-left:9px;white-space:nowrap;overflow:visible;text-align:left!important;vertical-align:middle!important;" nowrap="nowrap">
               
		                <a href="/web/20121221052454/http://www.modwiki.net/wiki/index.php?" title="5:24:54 Dec 21, 2012" style="background-color:transparent;border:none;"><img src="/static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0"/></a>
		                
			    </td>
           </tr>

           <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
           <tr style="width:110px;height:13px;font-size:9px!important;">
				<td style="padding-right:9px;font-size:11px!important;font-weight: bold;text-align:right;white-space:nowrap;overflow:visible;" nowrap="nowrap">
               
		                <a href="/web/20111023221855/http://www.modwiki.net/wiki/Index.php" style="text-decoration:none;color:#33f;font-weight:bold;background-color:transparent;border:none;" title="23 Oct 2011"><strong>2011</strong></a>
		                
               </td>
               <td id="displayYearEl" style="background:#000;color:#ff0;font-size:11px!important;font-weight: bold;padding-top:1px;width:34px;height:13px;text-align:center;" title="You are here: 6:19:28 Nov 20, 2012">2012</td>
				<td style="padding-left:9px;font-size:11px!important;font-weight: bold;white-space:nowrap;overflow:visible;" nowrap="nowrap">
               
                       2013
                       
				</td>
           </tr>
           </tbody></table>
       </td>

       </tr>
       <tr>
       <td style="vertical-align:middle;padding:0!important;">
           <a href="/web/20121120061928*/http://www.modwiki.net/wiki/Index.php" style="color:#33f;font-size:11px;font-weight:bold;background-color:transparent;border:none;" title="See a list of every capture for this URL"><strong>23 captures</strong></a>
           <div class="__wb_banner_div" style="margin:0!important;padding:0!important;color:#666;font-size:9px;padding-top:2px!important;white-space:nowrap;" title="Timespan for captures of this URL">23 Oct 11 - 29 Sep 13</div>
       </td>
       <td style="padding:0!important;">
       <a style="position:relative; white-space:nowrap; width:475px;height:27px;" href="" id="wm-graph-anchor">
       <div class="__wb_banner_div" id="wm-ipp-sparkline" style="position:relative; white-space:nowrap; width:475px;height:27px;background-color:#fff;cursor:pointer;border-right:1px solid #ccc;" title="Explore captures for this URL">
			<img id="sparklineImgId" style="position:absolute; z-index:9012; top:0px; left:0px;"
				onmouseover="showTrackers('inline');" 
				onmouseout="showTrackers('none');"
				onmousemove="trackMouseMove(event,this)"
				alt="sparklines"
				width="475"
				height="27"
				border="0"
				src="/web/jsp/graph.jsp?graphdata=475_27_1996:-1:000000000000_1997:-1:000000000000_1998:-1:000000000000_1999:-1:000000000000_2000:-1:000000000000_2001:-1:000000000000_2002:-1:000000000000_2003:-1:000000000000_2004:-1:000000000000_2005:-1:000000000000_2006:-1:000000000000_2007:-1:000000000000_2008:-1:000000000000_2009:-1:000000000000_2010:-1:000000000000_2011:-1:000000000111_2012:10:111101111111_2013:-1:111111111000_2014:-1:000000000000"></img>
			<img id="wbMouseTrackYearImg" 
				style="display:none; position:absolute; z-index:9010;"
				width="25" 
				height="27"
				border="0"
				src="/static/images/toolbar/transp-yellow-pixel.png"></img>
			<img id="wbMouseTrackMonthImg"
				style="display:none; position:absolute; z-index:9011; " 
				width="2"
				height="27" 
				border="0"
				src="/static/images/toolbar/transp-red-pixel.png"></img>
       </div>
		</a>

       </td>
       </tr></tbody></table>
   </td>
   <td style="text-align:right;padding:5px;width:65px;font-size:11px!important;">
       <a href="javascript:;" onclick="document.getElementById('wm-ipp').style.display='none';" style="display:block;padding-right:18px;background:url(/static/images/toolbar/wm_tb_close.png) no-repeat 100% 0;color:#33f;font-family:'Lucida Grande','Arial',sans-serif;margin-bottom:23px;background-color:transparent;border:none;" title="Close the toolbar">Close</a>
       <a href="http://faq.web.archive.org/" style="display:block;padding-right:18px;background:url(/static/images/toolbar/wm_tb_help.png) no-repeat 100% 0;color:#33f;font-family:'Lucida Grande','Arial',sans-serif;background-color:transparent;border:none;" title="Get some help using the Wayback Machine">Help</a>
   </td>
   </tr></tbody></table>

</div>
</div>
<script type="text/javascript">
 var wmDisclaimBanner = document.getElementById("wm-ipp");
 if(wmDisclaimBanner != null) {
   disclaimElement(wmDisclaimBanner);
 }
</script>
<!-- END WAYBACK TOOLBAR INSERT -->

	<div id="globalWrapper">
		<div id="column-content">
	<div id="content">
		<a name="top" id="top"></a>
				<h1 class="firstHeading">Index.php</h1>
		<div id="bodyContent">
			<h3 id="siteSub">From modwiki</h3>
			<div id="contentSub"></div>
									<div id="jump-to-nav">Jump to: <a href="/web/20121120061928/http://www.modwiki.net/wiki/Index.php#column-one">navigation</a>, <a href="/web/20121120061928/http://www.modwiki.net/wiki/Index.php#searchInput">search</a></div>			<!-- start content -->
			<p>Forms of life insurance, like <a href="/web/20121120061928/http://highrisklifeinsurance2012.weebly.com/" class='external text' title="http://highrisklifeinsurance2012.weebly.com/">affordable term life insurance</a> that's offered to purchase are term life insurance, mutual life insurance, and whole life insurance. There are other kinds available but these tend to function as the most typical among life insurance is purchased by those who. There are a significant few advantages of good life insurance and base will be touched by this article shortly on just a few of those advantages. <br /><br />1.If the policy manager has young ones, they may select specific amounts of income be given to each son or daughter should they die. This can be the same amount, or can be split in whatever way the policy owner sees fit. <br /><br />2.Financial reduction is given to the policy owner's family when they should die. Currently here is the number one reason why people buy life insurance, and it is the number one in the long list of advantages of good life insurance. This benefit doesn't need to be limited to only members of the family. A life insurance policy operator is permitted to call whoever they want as their successor. Fiscal stability may be fond of anyone who you think about to be essential in your lifetime. <br /><br />3.Both state and national governments offer tax reductions if a life insurance policy is owned by you. This may be viewed the quantity two in features of great life insurance. <br /><br />4.Policy owners could suggest that they desire their advantages to be used for their children to attend university rather than being settled directly to the little one. <br /><br />5.While it depends about what type of policy you purchase, you can use the benefits of the policy to obtain a loan, which can be properly used to cover taxes, mortgages and other bills you may need assist in paying at the time. <br /><br />The benefits of good life insurance are good, and far outweigh the disadvantages.
</p>
<!-- Saved in parser cache with key modwiki:pcache:idhash:37505-0!1!0!0!!en!2 and timestamp 20121119184706 -->
<div class="printfooter">
Retrieved from "<a href="/web/20121120061928/http://www.modwiki.net/wiki/Index.php">http://www.modwiki.net/wiki/Index.php</a>"</div>
						<!-- end content -->
			<div class="visualClear"></div>
		</div>
	</div>
		</div>
		<div id="column-one">
	<div id="p-cactions" class="portlet">
		<h5>Views</h5>
		<ul>
				 <li id="ca-nstab-main" class="selected"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Index.php">Article</a></li>
				 <li id="ca-talk"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Talk:Index.php">Discussion</a></li>
				 <li id="ca-edit"><a href="/web/20121120061928/http://www.modwiki.net/w/index.php?title=Index.php&amp;action=edit">Edit</a></li>
				 <li id="ca-history"><a href="/web/20121120061928/http://www.modwiki.net/w/index.php?title=Index.php&amp;action=history">History</a></li>
		</ul>
	</div>
	<div class="portlet" id="p-personal">
		<h5>Personal tools</h5>
		<div class="pBody">
			<ul>
				<li id="pt-login"><a href="/web/20121120061928/http://www.modwiki.net/w/index.php?title=Special:Userlogin&amp;returnto=Index.php">Log in / create account</a></li>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-logo">
		<a style="background-image: url(/web/20121120061928im_/http://www.modwiki.net/wiki/upload/wiki.png);" href="/web/20121120061928/http://www.modwiki.net/wiki/Main_Page" title="Main Page"></a>
	</div>
	<script type="text/javascript"> if (window.isMSIE55) fixalpha(); </script>
		<div class='portlet' id='p-Main'>
		<h5>Main</h5>
		<div class='pBody'>
			<ul>
				<li id="n-mainpage"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Main_Page">Main Page</a></li>
			</ul>
		</div>
	</div>
		<div class='portlet' id='p-id Tech 4'>
		<h5>id Tech 4</h5>
		<div class='pBody'>
			<ul>
				<li id="n-Doom-3"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Doom_3">Doom 3</a></li>
				<li id="n-Quake-4"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Quake_4">Quake 4</a></li>
				<li id="n-Prey"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Prey">Prey</a></li>
				<li id="n-ETQW"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Enemy_Territory:_Quake_Wars">ETQW</a></li>
				<li id="n-Wolfenstein"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Wolfenstein">Wolfenstein</a></li>
			</ul>
		</div>
	</div>
		<div class='portlet' id='p-id Tech 5'>
		<h5>id Tech 5</h5>
		<div class='pBody'>
			<ul>
				<li id="n-Rage"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Rage">Rage</a></li>
				<li id="n-Doom-4"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Doom_4">Doom 4</a></li>
			</ul>
		</div>
	</div>
		<div class='portlet' id='p-Quick Links'>
		<h5>Quick Links</h5>
		<div class='pBody'>
			<ul>
				<li id="n-Console"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Console">Console</a></li>
				<li id="n-Script-Events"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Scripting">Script Events</a></li>
				<li id="n-Material-Keywords"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Material_%28decl%29">Material Keywords</a></li>
				<li id="n-Modification-List"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Modlist">Modification List</a></li>
				<li id="n-Tutorial-List"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Tutorial_list">Tutorial List</a></li>
			</ul>
		</div>
	</div>
		<div class='portlet' id='p-Wiki'>
		<h5>Wiki</h5>
		<div class='pBody'>
			<ul>
				<li id="n-Open-tasks"><a href="/web/20121120061928/http://www.modwiki.net/wiki/modwiki:Open_tasks">Open tasks</a></li>
				<li id="n-recentchanges"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Special:Recentchanges">Recent changes</a></li>
				<li id="n-Style-guide"><a href="/web/20121120061928/http://www.modwiki.net/wiki/modwiki:Style_guide">Style guide</a></li>
				<li id="n-help"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Help:Contents">Help</a></li>
			</ul>
		</div>
	</div>
		<div id="p-search" class="portlet">
		<h5><label for="searchInput">Search</label></h5>
		<div id="searchBody" class="pBody">
			<form action="/web/20121120061928/http://www.modwiki.net/wiki/Special:Search" id="searchform"><div>
				<input id="searchInput" name="search" type="text" accesskey="f" value="" />
				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="Go" />&nbsp;
				<input type='submit' name="fulltext" class="searchButton" value="Search" />
			</div></form>
		</div>
	</div>
	<div class="portlet" id="p-tb">
		<h5>Toolbox</h5>
		<div class="pBody">
			<ul>
				<li id="t-whatlinkshere"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Special:Whatlinkshere/Index.php">What links here</a></li>
				<li id="t-recentchangeslinked"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Special:Recentchangeslinked/Index.php">Related changes</a></li>
<li id="t-upload"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Special:Upload">Upload file</a></li>
<li id="t-specialpages"><a href="/web/20121120061928/http://www.modwiki.net/wiki/Special:Specialpages">Special pages</a></li>
				<li id="t-print"><a href="/web/20121120061928/http://www.modwiki.net/w/index.php?title=Index.php&amp;printable=yes">Printable version</a></li>				<li id="t-permalink"><a href="/web/20121120061928/http://www.modwiki.net/w/index.php?title=Index.php&amp;oldid=403101">Permanent link</a></li>			</ul>
		</div>
	</div>
		</div><!-- end of the left (by default at least) column -->
			<div class="visualClear"></div>
			<div id="footer">
				<div id="f-poweredbyico"><a href="/web/20121120061928/http://www.mediawiki.org/"><img src="/web/20121120061928im_/http://www.modwiki.net/w/skins/common/images/poweredby_mediawiki_88x31.png" alt="MediaWiki" /></a></div>
				<div id="f-copyrightico"><a href="/web/20121120061928/http://www.gnu.org/copyleft/fdl.html"><img src="/web/20121120061928im_/http://www.modwiki.net/w/skins/common/images/gnu-fdl.png" alt='GNU Free Documentation License 1.2' /></a></div>
			<ul id="f-list">
				<li id="lastmod"> This page was last modified 01:28, 31 October 2012.</li>
				<li id="copyright">Content is available under <a href="/web/20121120061928/http://www.gnu.org/copyleft/fdl.html" class='external ' title="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License 1.2</a>.</li>
				<li id="privacy"><a href="/web/20121120061928/http://www.modwiki.net/wiki/modwiki:Privacy_policy" title="modwiki:Privacy policy">Privacy policy</a></li>
				<li id="about"><a href="/web/20121120061928/http://www.modwiki.net/wiki/modwiki:About" title="modwiki:About">About modwiki</a></li>
				<li id="disclaimer"><a href="/web/20121120061928/http://www.modwiki.net/wiki/modwiki:General_disclaimer" title="modwiki:General disclaimer">Disclaimers</a></li>
			</ul>
		</div>
	<script type="text/javascript"> if (window.runOnloadHook) runOnloadHook();</script>
</div>
<!-- Served by www.modwiki.net in 0.69 secs. -->
</body></html>





<!--
     FILE ARCHIVED ON 6:19:28 Nov 20, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 4:07:08 Oct 19, 2014.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->

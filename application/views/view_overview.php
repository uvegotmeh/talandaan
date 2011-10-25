<html class="cufon-active cufon-ready" xmlns="http://www.w3.org/1999/xhtml"><head>


<title>Talandaan</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<base href="<?php echo base_url();?>"/>
<link  rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/ui-lightness/jquery-ui-1.8.14.custom.css"/>
<link  rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/cupertino/theme.css"/>
<link  rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/template.css"/>
<link rel='stylesheet' type="text/css" href="<?php echo base_url();?>css/fullcalendar.css" />
<link rel='stylesheet' type="text/css" href="<?php echo base_url();?>css/fullcalendar.print.css" media='print' />


</head>

<body> 

<div class="main">

  <div class="header">
    <div class="header_resize">
        <div class="logo">
          <h1><a href="http://localhost/talandaan/index.php/overview"><span><cufon style="width: 140px; height: 40px;" alt="Talandaan" class="cufon cufon-canvas"><canvas style="width: 212px; height: 56px; top: -8px; left: -25px;" height="56" width="212"></canvas><cufontext>Talandaan</cufontext></cufon></span><cufon style="width: 88px; height: 40px;" alt="Box " class="cufon cufon-canvas"><canvas style="width: 171px; height: 56px; top: -8px; left: -25px;" height="56" width="171"></canvas><cufontext>Box </cufontext></cufon><small><br/><cufon style="width: 25px; height: 13px;" alt="Put " class="cufon cufon-canvas"><canvas style="width: 53px; height: 18px; top: -3px; left: -9px;" height="18" width="53"></canvas><cufontext>Put </cufontext></cufon><cufon style="width: 31px; height: 13px;" alt="your " class="cufon cufon-canvas"><canvas style="width: 58px; height: 18px; top: -3px; left: -9px;" height="18" width="58"></canvas><cufontext>your </cufontext></cufon><cufon style="width: 30px; height: 13px;" alt="things " class="cufon cufon-canvas"><canvas style="width: 58px; height: 18px; top: -3px; left: -9px;" height="18" width="58"></canvas><cufontext>things </cufontext></cufon><cufon style="width: 44px; height: 13px;" alt="to " class="cufon cufon-canvas"><canvas style="width: 72px; height: 18px; top: -3px; left: -9px;" height="18" width="72"></canvas><cufontext>to </cufontext></cufon><cufon style="width: 31px; height: 13px;" alt="do " class="cufon cufon-canvas"><canvas style="width: 59px; height: 18px; top: -3px; left: -9px;" height="18" width="59"></canvas><cufontext>do </cufontext></cufon></small></a><cufon style="width: 31px; height: 13px;" alt="Here" class="cufon cufon-canvas"><canvas style="width: 59px; height: 18px; top: -3px; left: -9px;" height="18" width="59"></canvas><cufontext>Here</cufontext></cufon></small></a></h1>
        </div>
        <div id="search" style="float:right; font-size: 20px; font-weight: bold; color:#333300;; ">     
              Search Guide:<input class="ui-widget-content ui-corner-all" id="search "type="text" value="search" maxlength="225"  style="width:170px;" />
                                 <input id="submit" type="submit" value="Go" style="float:right; height:35px; font-size: 15px; background-color: yellowgreen; color: #fff; font-weight: bold; padding: 5px;"/>   
        </div>
      <div class="menu">
              
        <ul>
          <li><a class="ajax" href="http://localhost/talandaan/index.php/overview/calendar">Calendar</a></li>
          <li><a class="ajax" href="http://localhost/talandaan/index.php/overview/services">Services</a></li>
          <li><a class="ajax" href="http://localhost/talandaan/index.php/overview/about">About Us</a></li>
          <li><a href="http://localhost/talandaan">Log out</a></li>
        </ul>

      </div>
    </div> 
  </div>
    
  <div class="body">
    <div class="body_resize">    
      <div class="left"> 
        <div class="resize_bg">
            <div id="ajax">
                <div id="calendar">
                
                </div>
            </div>  
        </div>
      </div>
        
        
      <div class="right">
          <div class="flip">Create New Event</div>
          <div class="panel">
          <div id="bo">    
          <div id="BTN" title="Create new event">
             
                <form name="dateRange" id="dateRangeForm" action="index.cfm" method="post">                  
                    <div id="messages" ></div>
                    <label>Title:</label>
                    <input id="title" type="text" name="title" value="" class="ui-widget-content ui-corner-all"/>
                    <div id="messaged" ></div>
                    <label>Description</label><textarea id="desc" name="desc" value="" class="ui-widget-content ui-corner-all"></textarea>
                     <div id="message" ></div>
                    <label for="startdate">Start Date:</label>
                    <input id="startdate" type="text"  class="ui-widget-content ui-corner-all" readonly /><input type="hidden" name="startdate" id="start_alternate" />
                    <label for="enddate">End Date:</label>
                    <input id="enddate" type="text" class="ui-widget-content ui-corner-all" readonly /><input type="hidden" name="enddate" id="end_alternate" />
                </form>
         
            <button id="create-new">New Event</button>
        </div>
        </div>
              </div>
              
        <div class="resize_box">
          <h2><cufon style="width: 113px; height: 24px;" alt="Sponsors" class="cufon cufon-canvas"><canvas style="width: 157px; height: 34px; top: -5px; left: -15px;" height="34" width="157"></canvas><cufontext>Sponsors</cufontext></cufon></h2>
          <ul class="sponsors">
            <li class="sponsors"><a href="http://localhost/talandaan/index.php/overview">DreamTemplate</a><br>
              Over 6,000+ Premium Web Templates</li>
            <li class="sponsors"><a href="http://localhost/talandaan/index.php/overview">TemplateSOLD</a><br>
              Premium WordPress &amp; Joomla Themes</li>
            <li class="sponsors"><a href="http://localhost/talandaan/index.php/overview">ImHosted.com</a><br>

              Affordable Web Hosting Provider</li>
            <li class="sponsors"><a href="http://localhost/talandaan/index.php/overview">CSS Hub</a><br>
              Premium CSS Templates</li>
            <li class="sponsors"><a href="http://localhost/talandaan/index.php/overview">Evrsoft</a><br>
              Website Builder Software &amp; Tools</li>

            <li class="sponsors"><a href="http://localhost/talandaan/index.php/overview">MyVectorStore</a><br>
              Royalty Free Stock Icons</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
  </div>
      
      
        <div id="msgDialog" title="Success"><p>New event created successfully!</p></div>
        <div id="delDialog" title="Confirm"><p>Are you sure</p></div>
     
      <div id="updateDialog" title="Update Events">
        <div id="updatebox">
            <form action="" method="POST">                
                <input id="event_id" type="hidden" name="event_id"/>
                <label>Update Title:</label>
                <input id="updatetitle" type="text" name="updatetitle"  class="ui-widget-content ui-corner-all"/>
                <p class="D">Description</p><textarea id="description" name="description" class="ui-widget-content ui-corner-all"></textarea>              
            </form>
        </div> 
      </div>
    
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">All Right Reserved 2011 @ <a href="http://localhost/talandaan/index.php/overview">PureBrothers LTD</a>.</p>
      <p class="rf">Powered By:<a href="http://localhost/talandaan/index.php/overview">www.talandaan.com</a></p>
    </div>
  </div>
</div>
</div>        

<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/calendar.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-uiad.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/cuf_run.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/ajax.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.loading.js"></script>




</body>
</html>
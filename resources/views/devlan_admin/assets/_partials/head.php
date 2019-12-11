<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Mart Developers">
    <link rel="shortcut icon" href="https://devlan.martdev.info/assets/img/favicon.png">
    <title>DevLan | Software Development projects,  Networking, Scripts, Topologies</title> 
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"/>
     <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.9.97/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/summernote/summernote-bs4.css"/>
    <!--Sweet Alert JS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5d0b353736eab972111853bd/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
<!--
	<script src="https://cdn.tiny.cloud/1/klsi2edxuj5y8m0uewbtz01nrt8w7kb6nleguyq0al600e76/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
  </head> -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144032797-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144032797-3');
</script>
<script>
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;

    if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

    function mischandler(){
    return false;
    }

    function mousehandler(e){
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
</script>

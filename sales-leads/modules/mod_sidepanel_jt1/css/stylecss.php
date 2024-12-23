
#sidepanel_jt213 {
	min-height:100px;
	height:auto !important;
	height:100px;
	z-index:2000;
	box-shadow: none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}


#sidepanel_jt213 h2.title {
	margin-top:5px;
}
#sidepanel_jt213 .content {
	clear:both;
	overflow:auto!important;
}
.ui-slideouttab-panel{padding:0;}
.ui-slideouttab-handle {
    background-color: white;
    padding: 0.6em 0.6em 0.6em 0.6em;
    box-sizing: border-box;
}
.ui-slideouttab-panel {
	display: block;
	position: fixed;
    border: 0px;
}
/* This class is added after the tabs are initialised, otherwise the user sees the 
   tabs slide out of the way when the page is initialised. */
.ui-slideouttab-ready {
	transition: transform 0.5s ease 0s;
}

/* Hide tabs and panels when printed. */
@media print {
    .ui-slideouttab-panel {
        display: none;
    }
}

/* Tab handles */
.ui-slideouttab-handle {
    display: block;
    position: absolute;
    cursor: pointer;
    color: white;
	font-size:14px!important;
	text-decoration:none;
   
}
.ui-slideouttab-handle:hover,.ui-slideouttab-handle:focus{text-decoration:none;}
.ui-slideouttab-handle-image {
    transform: rotate(0);
}

/* turn font awesome icon in a tab upright */
.ui-slideouttab-left .ui-slideouttab-handle>.fa, 
.ui-slideouttab-right .ui-slideouttab-handle>.fa { 
    transform: rotate(90deg);
}
.ui-slideouttab-handle>.fa {
    margin-left: 0.5em;
}

/* apply rounded corners if handle has the -rounded class */
.ui-slideouttab-top .ui-slideouttab-handle-rounded,
.ui-slideouttab-left .ui-slideouttab-handle-rounded {
    border-radius: 0 0 4px 4px;
}
.ui-slideouttab-right .ui-slideouttab-handle-rounded, 
.ui-slideouttab-bottom .ui-slideouttab-handle-rounded {
    border-radius: 4px 4px 0 0;
}

#sidepanel_jt213.ui-slideouttab-ready .handle213.imagebg.ui-slideouttab-handle {padding:0;background-color:transparent!important;}
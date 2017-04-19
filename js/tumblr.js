function tumblrError(){
		if(document.getElementById('tumSpan').innerHTML == '<font size="4">&nbsp;&nbsp;&nbsp;Loading…</font>'){
			document.getElementById('tumSpan').innerHTML = "<div style='padding:8px;'>Sorry, there was an error; Tumblr servers may be overloaded.<br>You can still view the blog directly <a href='http://dansakamoto.tumblr.com'>here</a>.</div>";
			loadTumblr();
		}
	}
	
function errorCountdown(){
    setTimeout("tumblrError()",4000);
}

function loadTumblr(tumPosts){
    var tumNum = 15;
    var tumPosts = tumblr_api_read["posts"];
    var tumContent = "<div class='tumdeets'>The following is mostly behind-the-scenes of creative endeavors. When I'm too busy for creative endeavors, it's a record of excuses to myself for why I was too busy for creative endeavors.</div>";
    
    var i = 0;
    
    for(i; i<tumNum; i++){
    
    	if(tumPosts[i]["type"] != "audio"){
    		tumContent += "<div class='tumFrame'><div class='tumItem'>";
    	}
    
    	switch(tumPosts[i]["type"]){
    
    		case "photo":
    			tumContent += "<a href=\"" + tumPosts[i]["url"] + "\"><img src=\"" + tumPosts[i]["photo-url-500"] + "\"></a>";// + tumPosts[i]["photo-caption"];
    			break;
    			
    		case "regular":
    			tumContent += tumPosts[i]["regular-body"];
    			break;
    			
    		case "link":
    			tumContent += "<a style=\"font-size:large;\" href=\"" + tumPosts[i]["link-url"] + "\">";
    			if(tumPosts[i]["link-text"]){ tumContent += tumPosts[i]["link-text"]; }
    			else{ tumContent += tumPosts[i]["link-url"]; }
    			tumContent += "</a><br>" + tumPosts[i]["link-description"];
    			break;
    		
    		case "quote":
    			tumContent += "\"" + tumPosts[i]["quote-text"] + "\"<br><br>&nbsp;&nbsp;&nbsp;&nbsp;~" + tumPosts[i]["quote-source"];
    			break;
    		
    		case "conversation":
    			tumContent += "<a href=\"" + tumPosts[i]["url"] + "\">" + tumPosts[i]["conversation-title"] + " (conversation: view on tumblr)</a>";
    			break;
    		
    		case "video":
    			tumContent += "<a href=\"" + tumPosts[i]["url"] + "\">" + tumPosts[i]["video-player"] + "</a>" + tumPosts[i]["video-caption"];
    			break;
    		
    		case "audio":
    			tumNum++;
    			break;
    		
    		case "answer":
    			tumContent += "<a href=\"" + tumPosts[i]["url"] + "\"><b>Someone asked the quesiton:</b></a><br>" + tumPosts[i]["question"] + "<br><br>A: " + tumPosts[i]["answer"] + "";
    			break;
    
    	}
    	
    	if(tumPosts[i]["type"] != "audio"){
    		tumContent += "</div><div class=\"post-meta\"><div class=\"date\"><a href=\"" + tumPosts[i]["url"] + "\">" + tumPosts[i]["date"].substring(8,11) + " " + tumPosts[i]["date"].substring(5,7) + ", " + tumPosts[i]["date"].substring(12,16) + "</a></div></div></div>";
    	}
    	
    }
    
    document.getElementById('tumSpan').innerHTML = tumContent;
    document.getElementById('tumblbottom').innerHTML = '<a href="http://dansakamoto.tumblr.com">more on Tumblr</a>';
}		
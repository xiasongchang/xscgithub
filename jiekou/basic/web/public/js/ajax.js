function ajax(url,data=''){
	var str=''
	$.ajax({
			type:"get",
			url:"http://www.jiekou.com/index/"+url+"?callback=?",
			data:data,
			dataType:"jsonp",
			jsonp:"callback",
			async:false,
			success:function(msg)
			{
				//str = msg
				alert(msg)
			}
		})
	//return str
}

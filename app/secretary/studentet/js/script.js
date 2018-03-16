

// init variables

var trcopy;
var editing = 0;
var tdediting = 0;
var editingtrid = 0;
var editingtdcol = 0;
var inputs = ':checked,:selected,:text,textarea,select';

$(document).ready(function(){

	// Percakto icon per edit dhe delete 
	$(".eimage").attr("src",editImage);
	$(".dimage").attr("src",deleteImage);


	// Krijojm nje rresht bosh per te shtuar perdoruesi vlerat
	blankrow = '<tr valign="top" class="inputform"><td></td>';
	for(i=0;i<columns.length;i++){
		// Krijimi i  inputeve
		input = createInput(i,'');
		blankrow += '<td class="ajaxReq">'+input+'</td>';
	}
	blankrow += '<td><a href="javascript:;" class="'+savebutton+'"><img src=" "><span class="glyphicon glyphicon-save"></span></a></td></tr>';

	// shto inputet bosh ne fund te tabeles
	// $("."+table).append(blankrow);

	//shto inputet ne fillim te tabeles mbas headerit
	$(blankrow).insertAfter('.table #header');

	// Fshi regjistrim
	$(document).on("click","."+deletebutton,function(){
		var id = $(this).attr("id");
		if(id){
			if(confirm("Vertet deshironi ta fshini kete regjistrim?"))
				ajax("rid="+id,"del");
		}
	});

	// Shto nje regjistrim te ri
	$("."+savebutton).on("click",function(){
		var validation = 1;

		//gjejm vlerat e perdoruesit ne inputet pasi ka shtypur butonin save
		var $inputs =
		$(document).find("."+table).find(inputs).filter(function() {
			// kontrollo nqs inputet jane bosh
			if($.trim( this.value ) == ""){
				$(this).addClass("error");
				validation = 0;
			}else{
				$(this).addClass("success");
			}
			return $.trim( this.value );
		});

		var array = $inputs.map(function(){
			//console.log(this.value);
			//console.log(this);
			return this.value;
		}).get();

		var serialized = $inputs.serialize();
		if(validation == 1){
			ajax(serialized,"save");
		}
	});

	// Add new record
	$(document).on("click","."+editbutton,function(){
		var id = $(this).attr("id");
		if(id && editing == 0 && tdediting == 0){
			// hide editing row, for the time being
			$("."+table+" tr:nth-child(2)").fadeOut("fast");
						
			var html;
			html += "<td>"+$("."+table+" tr[id="+id+"] td:first-child").html()+"</td>";
			for(i=0;i<columns.length;i++){
				// fetch value inside the TD and place as VALUE in input field
				var val = $(document).find("."+table+" tr[id="+id+"] td[class='"+columns[i]+"']").html();
				input = createInput(i,val);
				html +='<td>'+input+'</td>';
			}
			html += '<td><a href="javascript:;" id="'+id+'" class="'+updatebutton+'"><img src=""><img src="" class="eimage"> <span class="glyphicon glyphicon-save"></span></a> <a href="javascript:;" id="'+id+'" class="'+cancelbutton+'"><img src="" > <span class="glyphicon glyphicon-remove"></span></a></td>';
			
			// Before replacing the TR contents, make a copy so when user clicks on 
			trcopy = $("."+table+" tr[id="+id+"]").html();
			$("."+table+" tr[id="+id+"]").html(html);	
			
			// set editing flag
			editing = 1;
		}
	});

	$(document).on("click","."+cancelbutton,function(){
		var id = $(this).attr("id");
		$("."+table+" tr[id='"+id+"']").html(trcopy);
		$("."+table+" tr:nth-child(2)").slideDown();
		editing = 0;
	});

	$(document).on("click","."+updatebutton,function(){
		id = $(this).attr("id");
		var $inputs =
		$(document).find("."+table).find(inputs).filter(function() {
			return $.trim( this.value );
		});

		var array = $inputs.map(function(){
			console.log(this.value);
			return this.value;
		}).get();
		serialized = $inputs.serialize();
		ajax(serialized+"&rid="+id,"update");
		// clear editing flag
		editing = 0;
	});

	// td doubleclick event
	$(document).on("dblclick","."+table+" td",function(e){
		// check if any other TD is in editing mode ? If so then dont show editing box
		//alert(tdediting+"==="+editing);
		var isEditingform = $(this).closest("tr").attr("class");
		if(tdediting == 0 && editing == 0 && isEditingform != "inputform"){
			editingtrid = $(this).closest('tr').attr("id");
			editingtdcol = $(this).attr("class");
			var text = $(this).html();
			var tr = $(this).parent();
			var tbody = tr.parent();
			for (var i = 1; i < tr.children().length-1; i++) {
				if (tr.children().get(i) == this) {

					var column = i;
					break;
				}
			}
			
			// decrement column value by one to avoid sr no column
			column--; 
			//alert(column+"==="+placeholder[column]);
			if(column <= columns.length){
				var text = $(this).html();
				//alert(text);
				input = createInput(column,text);
				$(this).html(input);
				$(this).find(inputs).focus();
				tdediting = 1;
			}
		}
	});
	
	// td lost focus event
	
	$(document).on("blur","."+table+" td",function(e){
		if(tdediting == 1){
			var newval = $("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").find(inputs).val();
			ajax(editingtdcol+"="+newval+"&rid="+editingtrid,"updatetd");
		}
	});
	
});

createInput = function(i,str){
	str = typeof str !== 'undefined' ? str : null;
	//alert(str);
	if(inputType[i] == "text"){
		input = '<input type='+inputType[i]+' name='+columns[i]+' placeholder="'+placeholder[i]+'" value='+str+' >';
	}else if(inputType[i] == "textarea"){
		input = '<textarea name='+columns[i]+' placeholder="'+placeholder[i]+'">'+str+'</textarea>';
	}
	else if(inputType[i] == "select"){
		input = '<select name='+columns[i]+'>';
		for(i=0;i<selectOpt.length;i++){
			//console.log(selectOpt[i]);
			selected = "";
			if(str == selectOpt[i])
				selected = "selected";
			input += '<option value="'+selectOpt[i]+'" '+selected+'>'+selectOpt[i]+'</option>';
		}
		input += '</select>';
		//console.log(str);
	}
	return input;
}

ajax = function (params,action){
	$.ajax({
		type: "POST", 
		url: "ajax.php", 
		data : params+"&action="+action,
		dataType: "json",
		success: function(response){
		  switch(action){
			case "save":
				var seclastRow = $("."+table+" tr").length;
				if(response.success == 1){
					var html = "";
					
					html += "<td>"+response["id"]+"</td>";
					for(i=0;i<columns.length;i++){
						html +='<td class="'+columns[i]+'">'+response[columns[i]]+'</td>';

					}
                    html += '<td><a href="javascript:;" id="'+response["id"]+'" class="ajaxEdit"> <span class="glyphicon glyphicon-pencil"></span></a> <a href="javascript:;" id="'+response["id"]+'" class="'+deletebutton+'"><span class="glyphicon glyphicon-trash"></span></a></td>';
					// Shto inputet ne rreshtin e parafundit
					// $("."+table+" tr").last().before('<tr id="'+response.id+'">'+html+'</tr>');

					//Shto rreshtin e ri ne fillim te tabeles mbas inputeve
					$('<tr id="'+response.id+'">'+html+'</tr>').insertAfter('.table .inputform');

					
					if(effect == "slide"){
						// Little hack to animate TR element smoothly, wrap it in div and replace then again replace with td and tr's ;)
						$("."+table+" tr:nth-child(2)").find('td')
						 .wrapInner('<div style="display: none;" />')
						 .parent()
						 .find('td > div')
						 .slideDown(700, function(){
							  var $set = $(this);
							  $set.replaceWith($set.contents());
						});
					}
					else if(effect == "flash"){
					   $("."+table+" tr:nth-child("+seclastRow+")").effect("highlight",{color: '#acfdaa'},100);
					}else
					   $("."+table+" tr:nth-child("+seclastRow+")").effect("highlight",{color: '#acfdaa'},1000);

					// Blank input fields
					$(document).find("."+table).find(inputs).filter(function() {
						// check if input element is blank ??
						this.value = "";
						$(this).removeClass("success").removeClass("error");
					});
				}
			break;
			case "del":
				var seclastRow = $("."+table+" tr").length;
				if(response.success == 1){
					$("."+table+" tr[id='"+response.id+"']").effect("highlight",{color: '#f4667b'},500,function(){
						$("."+table+" tr[id='"+response.id+"']").remove();
					});
				}
			break;
			case "update":
				$("."+cancelbutton).trigger("click");
				for(i=0;i<columns.length;i++){
					$("tr[id='"+response.id+"'] td[class='"+columns[i]+"']").html(response[columns[i]]);
				}
			break;
			case "updatetd":
				//$("."+cancelbutton).trigger("click");
				var newval = $("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").find(inputs).val();
				
				//alert($("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").html());
				$("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").html(newval);

				//$("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").html(newval);
				// remove editing flag
				tdediting = 0;
				$("."+table+" tr[id='"+editingtrid+"'] td[class='"+editingtdcol+"']").effect("highlight",{color: '#acfdaa'},1000);
			break;
		  }
		},
		error: function(){
			alert("Dicka ka ndodhur gabim,ju lutem provoni serish duke rifreskuar faqen");
		}
	});
}

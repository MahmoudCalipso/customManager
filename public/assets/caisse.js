function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}
/*
$("#mark_filter").on("change", function() {
  var value = $("#mark_filter").val();
  document.getElementById("filterForm").submit();
});

$("#type_filter").on("change", function() {
  var value = $("#type_filter").val();
  document.getElementById("filterForm").submit();
});*/

function addItem(item_id) {
  try {
    $.get("/session/articles/get", function(session_data) {
      $.get("article/get/"+item_id, function( data ) {
        $.get("session/price/getUpdated", function(data_price) {
          if(data_price.response == "true") {
            document.getElementById("prix_total_ht").innerHTML = data_price.price.ht;
            document.getElementById("prix_total_ttc").innerHTML = data_price.price.ttc;

            // Do everything related to document elements here.

            if(!isEmpty(data)) {
              if(session_data[item_id] != undefined && session_data[item_id] != null) {
                var count = parseInt(document.getElementById("item_count_"+item_id).value)+1;
                document.getElementById("item_count_"+item_id).value = count;
              } else {
                if(document.getElementById("itemsBody").className == "panel-body hidden") {
                  document.getElementById("itemsBody").className = "panel-body";
                  document.getElementById("noItemsBody").className = "panel-body hidden";
                }

                var htmlData = '<li id="item_'+item_id+'"><div class="inline goodalign"><img src="'+data.Art_Image+'" /></div><div class="inline goodalign leftalign"><h1>'+data.Art_Designation+'</h1><h2>Prix HT : '+data.ArtV_HT+' TND</h2><h2>Prix TTC : '+data.ArtV_TTC+' TND</h2><input onchange="changeItemCount('+item_id+')" id="item_count_'+item_id+'" type="number" value="'+data.item_count+'" class="form-control count inline" id="item_'+data.Art_Id+'_count" /><button onclick="deleteItem('+data.Art_Id+')" class="btn btn-danger inline bottomalign"><fa class="fa fa-times"></button></div></li>';
                document.getElementById("dataItems").innerHTML += htmlData;
              }
            }
          }
        });
      });
    });
  } catch(e) {
    console.log(e);
  }
}

function deleteItem(item_id) {
  try {
    $.get("session/articles/remove/"+item_id, function(data) {
      if(data.response == "true") {
        $.get("session/price/getUpdated", function(data_price) {
          if(data_price.response == "true") {
            document.getElementById("prix_total_ht").innerHTML = data_price.price.ht;
            document.getElementById("prix_total_ttc").innerHTML = data_price.price.ttc;

            // Do everything related to document elements here.

            var element = document.getElementById("item_"+item_id);
            element.parentNode.removeChild(element);
            var items = data.items;
            if(items == "") {
              document.getElementById("itemsBody").className = "panel-body hidden";
              document.getElementById("noItemsBody").className = "panel-body";
            }
          }
        });
      }
    });
  } catch(e) {
    console.log(e);
  }
}

function changeItemCount(id) {
  try {
    var item_count = $("#item_count_"+id).val();
    $.get("session/articles/setCount/"+id+"/"+item_count, function(data) {
      if(data.response == "true") {
        $.get("session/price/getUpdated", function(data_price) {
          if(data_price.response == "true") {
            document.getElementById("prix_total_ht").innerHTML = data_price.price.ht;
            document.getElementById("prix_total_ttc").innerHTML = data_price.price.ttc;
          }
        });
      }
    });
  } catch(e) {
    console.log(e);
  }
}

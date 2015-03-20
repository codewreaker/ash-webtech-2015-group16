/* This Javascript Files Deals With Scripts For Functionality */
$(document).ready(function() {

    /* activating a selected div and switching between divs */

    $(".sideMenuItem").click(function() {
        var $selectedItem = $(this).attr('id');
        var $selectedPage = "#" + $selectedItem + "Page";
        /*        $($selectedPage).toggleClass("hide");*/
        $(".sideMenuItem").each(function() {
            var $allItems = $(this).attr('id');
            var $allElements = "#" + $allItems + "Page";
            $($allElements).addClass("hide");
        });
        $($selectedPage).removeClass("hide");
    });

    /* Including a block of text into a div */
    $(".create").click(function(){
        var form = '<form action="POST" class="createForm">'
                                    +'<div class="divider"></div>'
                                    +'<input type="text" placeholder="Task Name">'                                 
                                    +'<select name="" id="" class="form-styling">'
                                        +'<option value="0">Select a Personnel</option>'
                                        +'<option value="1"></option>'
                                        +'<option value="2"></option>'
                                        +'<option value="3"></option>'
                                        +'<option value="4"></option>'
                                        +'<option value="5"></option>'
                                    +'</select>'
                                    +'<input type="date" class="form-styling">'
                                    +'<div>'
                                        +'<textarea placeholder="Enter a Short Description of the Task"></textarea>'
                                    +'</div>'
                                    +'<input type="button" value="Save Task" />'
                                    +'<div class="optionalFeatures">'
                                        +'<span class="fa fa-edit"></span>'
                                        +'<span class="fa fa-trash-o"></span>'
                                    +'<span class="fa fa-refresh"></span>'
                                    +'</div>'
                                +'</form>';
        $("#formSection").append(form);
        var $toAdjust = $("#divContent").height()+100;
        $("#sidemenu").css('height',$toAdjust);
    });


});

/*
<form action='POST' class="createForm">
                             <div class="divider"></div>
                              <input type="text" placeholder="Task Name" >
                              <select name="" id="" >
                                 <option value="0">Select a Personnel</option>
                                  <option value="1"></option>
                                  <option value="2"></option>
                                  <option value="3"></option>
                                  <option value="4"></option>
                                  <option value="5"></option>
                              </select>
                              <input type="date">

                              <textarea placeholder="description">
                              </textarea>

                              <input type="button" value="Save Task"/>
                          </form>
*/
$(document).ready(function(){

    source = "http://www.pavatimarine.com/blog/";

    function closedialog(){

        $(".dialog").delay(250).fadeOut(250, function(){
            $(".dialog-shadow").delay(250).fadeOut(250, function(){
                $(".dialog-shadow").remove();
            });
        });

    }

    function opendialog(editType){

        if($(".dialog-shadow").length > 0){}else{

            $("body").prepend("<div class='dialog-shadow'/>");
            $(".dialog-shadow").load(source+"edit-"+editType+".php", function(){
                $(this).delay(500).fadeIn(250);

                $(".close-admin-dialog").click(function(event){ event.preventDefault(); closedialog(); });

            });

        }

    }

    $(".btn-edit").click(function(){

        var editType = $(this).attr("id").replace("edit-","");

        if(editType === "cats"){ opendialog(editType); }

    });


    $(".add-post").click(function(){

        if($(".dialog-shadow").length > 0){}else{

            $("body").prepend("<div class='dialog-shadow'/>");
            $(".dialog-shadow").load(source+"add-post.php", function(){
                $(this).delay(500).fadeIn(250);

                $(".close-admin-dialog").click(function(){ closedialog(); });

                $(".toggler").click(function(){
                    $(this).toggleClass("on");
                    $(this).toggleClass("off");

                    var setting = $(this).attr("id").replace("toggle-","");
                    $("#settings-"+setting).click();

                });

                $(".post-title").keyup(function(){
                    var title = $(this).val().replace(/[^a-z0-9\s]/gi, '').replace(/\s+/g, '-').toLowerCase();
                    $(".post-link").empty().append(title);
                });

                $('#post-copy').summernote({

                    toolbar: [

                    ['style', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'fontsize']],
                    ['layout', ['ul', 'ol', 'paragraph']],
                    ['insert', ['picture', 'link', 'video']],
                    ['misc', ['codeview']]

                    ],

                    onkeyup: function(e){

                        var copy = $(".note-editable").html();
                        $('#post-copy').html(copy);

                    }

                });

                $(".set-image").click(function(){

                    if($(".image-set").length > 0){}else{

                        $(".dialog").append("<div class='image-set' style='display:none;' />");
                        $(".image-set").load(source+"add-image.php", function(){

                            $(this).delay(500).fadeIn(500);

                            $(".close-admin-dialog").click(function(){

                                $(".image-set").delay(250).fadeOut(500, function(){
                                    $(".image-set").remove();
                                });

                            });

                            $(".upload-button").click(function(){

                                $(".up-indicate").show();

                            });


                            $(".thumb-pick").click(function(){

                                var thumb = $(this).attr("data-img");
                                $(".featured-image").attr("src", thumb);
                                $(".post-featured-image").addClass("visible");
                                $(".post-thumb").val(thumb);

                                $(".image-set").delay(250).fadeOut(500, function(){
                                    $(".image-set").remove();
                                });

                                $(".remove-thumb").click(function(){

                                    $(".post-featured-image").removeClass("visible");
                                    $(".post-thumb").val("");

                                });

                            });


                            $(".uploadframe").load(function(){

                                var uploaded = $(".uploadframe").contents().find(".uploaded-image").attr("src");
                                if(uploaded === "undefined" || uploaded === "" || uploaded === "Please upload an image file."){ alert("Please upload an image file."); }else{

                                    $(".image-list").prepend("<li class='thumb-pick' data-img='"+uploaded+"' ><div class='thumb-wrap'><img src='"+uploaded+"' /></div></li>");

                                    $(".thumb-pick").click(function(){

                                        var thumb = $(this).attr("data-img");
                                        $(".featured-image").attr("src", thumb);
                                        $(".post-featured-image").addClass("visible");

                                        $(".image-set").delay(250).fadeOut(500, function(){
                                            $(".image-set").remove();
                                        });

                                    });

                                }

                                $(".thumb-pick[data-img='undefined']").remove();
                                $(".up-indicate").hide();
                                $(".upload-input").val("");

                            });

                        });

                    }

                });


            });

        }

    });


    $(".post-edit").click(function(){

        var post = $(this).attr("data-post");

        if($(".dialog-shadow").length > 0){}else{

            $("body").prepend("<div class='dialog-shadow'/>");
            $(".dialog-shadow").load(source+"edit-post.php?post="+post, function(){
                $(this).delay(500).fadeIn(250);

                $(".close-admin-dialog").click(function(){ closedialog(); });

                $(".toggler").click(function(){
                    $(this).toggleClass("on");
                    $(this).toggleClass("off");

                    var setting = $(this).attr("id").replace("toggle-","");
                    $("#settings-"+setting).click();

                });

                $(".post-title").keyup(function(){
                    var title = $(this).val().replace(/[^a-z0-9\s]/gi, '').replace(/\s+/g, '-').toLowerCase();
                    $(".post-link").empty().append(title);
                });

                $('#post-copy').summernote({

                    toolbar: [

                    ['style', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'fontsize']],
                    ['layout', ['ul', 'ol', 'paragraph']],
                    ['insert', ['picture', 'link', 'video']],
                    ['misc', ['codeview']]

                    ],

                    onkeyup: function(e){

                        var copy = $(".note-editable").html();
                        $('#post-copy').html(copy);

                    }

                });

                $(".remove-thumb").click(function(){

                    $(".post-featured-image").removeClass("visible");
                    $(".post-thumb").val("");

                });

                $(".set-image").click(function(){

                    if($(".image-set").length > 0){}else{

                        $(".dialog").append("<div class='image-set' style='display:none;' />");
                        $(".image-set").load(source+"add-image.php", function(){

                            $(this).delay(500).fadeIn(500);

                            $(".close-admin-dialog").click(function(){

                                $(".image-set").delay(250).fadeOut(500, function(){
                                    $(".image-set").remove();
                                });

                            });

                            $(".upload-button").click(function(){

                                $(".up-indicate").show();

                            });


                            $(".thumb-pick").click(function(){

                                var thumb = $(this).attr("data-img");
                                $(".featured-image").attr("src", thumb);
                                $(".post-featured-image").addClass("visible");
                                $(".post-thumb").val(thumb);

                                $(".image-set").delay(250).fadeOut(500, function(){
                                    $(".image-set").remove();
                                });

                                $(".remove-thumb").click(function(){

                                    $(".post-featured-image").removeClass("visible");
                                    $(".post-thumb").val("");

                                });

                            });


                            $(".uploadframe").load(function(){

                                var uploaded = $(".uploadframe").contents().find(".uploaded-image").attr("src");
                                if(uploaded === "undefined" || uploaded === "" || uploaded === "Please upload an image file."){ alert("Please upload an image file."); }else{

                                    $(".image-list").prepend("<li class='thumb-pick' data-img='"+uploaded+"' ><div class='thumb-wrap'><img src='"+uploaded+"' /></div></li>");

                                    $(".thumb-pick").click(function(){

                                        var thumb = $(this).attr("data-img");
                                        $(".featured-image").attr("src", thumb);
                                        $(".post-featured-image").addClass("visible");

                                        $(".image-set").delay(250).fadeOut(500, function(){
                                            $(".image-set").remove();
                                        });

                                    });

                                }

                                $(".thumb-pick[data-img='undefined']").remove();
                                $(".up-indicate").hide();
                                $(".upload-input").val("");

                            });

                        });

                    }

                });


                $(".delete-post").click(function(event){

                    event.prevent

                    var post = $(this).attr("id").replace("delete-post-","");
                    var post_title = $(this).attr("data-title");

                    current_post = post;

                    $("#delete-post-conf-"+current_post).addClass("visible");

                    $(".confirm-delete").mouseout(function(){
                    $(this).removeClass("visible"); });

                    $(".confirm-delete").mouseup(function(){

                        $(".delete-post-container").load("http://www.pavatimarine.com/blog-test/delete-post.php?post="+current_post, function(){

                            $("#post-"+current_post).before("<div class='post-undo'><b>"+post_title+"</b> post has been deleted. <a class='post-undo-link' id='undo-delete-"+current_post+"'><i class='fa fa-lg fa-reply'></i>Undo</a></div>");

                            $("#post-"+current_post).remove();
                            $("#post-author-"+current_post).remove();
                            $("#post-comments-"+current_post).remove();

                            closedialog();

                            $(".post-undo-link").click(function(){

                                alert(current_post);

                            });

                        });

                    });

                });


            });

        }

    });


});

//头像旋转
$(function(){
    var i = 0;
    
    $(".pictures-rotating-left").click(function(){
        i++;
        var degree = -90*i;
        $(".xzpic").css({"transform" : "rotate(" + degree + "deg)"});
    })
    
    $(".pictures-rotating-right").click(function(){
        i++;
        var shgree = 90*i;
        $(".xzpic").css({"transform" : "rotate(" + shgree + "deg)"});
    })
    
    //聊天表情与图片弹窗
    $(".chat-add").click(function(){
        $(".chat-add-window").toggle();
    })
    $(".chat-add").click(function(){
        $(".chat-face-window").hide();
    })
    $(".chat-face").click(function(){
        $(".chat-face-window").toggle();
    })
    $(".chat-face").click(function(){
        $(".chat-add-window").hide();
    })
    
    //举报弹窗
    $(".cancelbtn").click(function(){
        $(".tck").show();
    })
    $(".tck-qx").click(function(){
        $(".tck").hide();
    })
    $(".tck1").click(function(){
        $(".tck").hide();
    })
    
    //点击选择
    $(".rep2 li").click(function(){
        clear();
        $(this).find("em").addClass("relww");
    });
    
    function clear(){
        $(".rep2 li").find("em").each(function(){
            if($(this).hasClass("relww")){
                $(this).removeClass("relww");
            }
        })
    }
    
    //回复弹窗
    $(".fh").each(function(){
        $(this).click(function(){
            $(this).toggleClass("active");
            $(this).next().toggle();
        })
    })

    //未读消息
    $(".newsbox").click(function(){
        $(this).addClass("active");
    })
    
    //点击回复
    $(".vz-btn2").each(function(){
        $(this).click(function(){
            $(this).toggleClass("active");
            $(this).next().toggle();
        })
    })
    
    //tab切换
    settab(".tabctrl", ".tabcon", "click", "active");
    
})

function settab(menus, cons, c, d)
{
    $(menus).children().eq(0).addClass(d);
    $(cons).children().hide().eq(0).show();
    $(menus).children().each(function(){
        $(this)[c](function(){
            var index = $(this).index();
            $(this).addClass(d).siblings().removeClass(d);
            $(cons).children().hide().eq(index).show();
        });
    });
};

//点击切换效果
$('.action').click(function() {
    var n,src;
    // 替换图片地址
    $('.action').each(function(){
        if ($(this).hasClass('active')) {
            src = $(this).find('img').attr('src');

            //swap src
            n = $(this).attr('substt');
            $(this).attr('substt',src);
            $(this).find('img').attr('src',n);

            $(this).removeClass('active');
        }
    });
    
    $(this).addClass('active');

    src = $(this).find('img').attr('src');
    n = $(this).attr('substt');
    $(this).attr('substt',src);
    $(this).find('img').attr('src',n);
});

//设置最佳回复
$('.best_post_answer').click(function(){
    var r=confirm("确定设置为最佳回复吗？");
    if(r == true){
        var old_post_id = $(this).find('input:hidden').eq(0).val();
        var best_post_id = $(this).find('input:hidden').eq(1).val();
        var post_point = $(this).find('input:hidden').eq(2).val();
    
        $.ajax({
            type:"POST",
            url:"/fenxiao/bbs/index.php/Mobile/Post/postRewardBestReply",
            data:{'old_post_id':old_post_id,'best_post_id':best_post_id,'post_point':post_point},
            dataType:"json",
            async: false,
            success:function(data){
                if(data.success == true){
                    alert('设置成功');
                    $('.best_post_answer').hide();
                    $('.best_post_'+old_post_id+'_'+best_post_id).show();
                }
            }
        });
    }
});

$(document).on('click', "#msgPerSubmit", function(){
    url = '/bbs/index.php/Mobile/message/messagePerSend';
    data = {'to_user_id':$('#to_user_id').val(), 'message':$('#messageContent').val()};
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        dataType: "json",
        success:function(data){
            window.location.reload();
        }
    });
})

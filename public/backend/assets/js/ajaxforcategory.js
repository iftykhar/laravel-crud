jQuery(document).ready(function(){
    jQuery(document).on("click",".add-category",function(){
        // alert('jh');
        var name = jQuery('.category-name').val();
        var des = jQuery('.category-des').val();
        var status = jQuery('.category-status').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "insertcategory",
            type:"POST",
            data:{
                name:name,
                des:des,
                status:status
            },
            success:function(res){
                alert(res.msg);
                jQuery("#add").modal('hide');
                show();
            }
        })

    })

    show()
    function show(){
        jQuery.ajax({
            url: "showcategory",
            type: "GET",
            dataType:"json",
            success:function(res){
                var alldata = "";
                var sl = 1;
                $.each(res.alldata, function(key, val){
                    var status = "";
                    if(val.status=='1'){
                        status = '<button value="'+val.id+'" class="btn-cat-active btn btn-info btn-sm">Active</button>';
                    }
                    else{
                        status = '<button value="'+val.id+'" class="btn-cat-inactive btn btn-warning btn-sm">Inactive</button>';
                    }
                    alldata +='<tr>\
                    <td>'+sl+'</td>\
                    <td>'+val.name+'</td>\
                    <td>'+val.des+'</td>\
                    <td>'+status+'</td>\
                    <td>\
                    <button value="'+val.id+'" class="btn-cat-edit btn btn-info btn-sm">edit</button>\
                    <button value="'+val.id+'" class="btn-cat-delete btn btn-danger btn-sm">delete</button>\
                    </td>\
                    </tr>';
                    sl++;
                });
                jQuery(".alldata").html(alldata);
            }
        })
    }

    jQuery(document).on("click",".btn-cat-delete",function(){
        jQuery("#delete").modal('show');
        var id = jQuery(this).val();
        jQuery("#m-cat-delete-btn").val(id);
    });
    jQuery(document).on("click",'#m-cat-delete-btn',function(){
        var id = jQuery(this).val();
        jQuery.ajax({
            url:"/deletecategory/"+id,
            type:"get",
            success:function(res){
                alert(res.msg);
                show();
                jQuery("#delete").modal('hide');
            }
        });
        
    });

    jQuery(document).on('click','.btn-cat-active', function(){
        var id = jQuery(this).val();

        jQuery.ajax({
            url:"/activecategory/"+id,
            type:"get",
            success:function(res){
                alert(res.msg);
                show();
            }
        })
    });
    jQuery(document).on('click','.btn-cat-inactive', function(){
        var id = jQuery(this).val();

        jQuery.ajax({
            url:"/inactivecategory/"+id,
            type:"get",
            success:function(res){
                alert(res.msg);
                show();
            }
        })
    });

    jQuery(document).on("click",".btn-cat-edit",function(){
        var id = jQuery(this).val();
        jQuery(".update-category").show();
        jQuery(".add-category").hide();
        jQuery("#add").modal('show');
        jQuery.ajax({
            url:"/editcategory/"+id,
            type:"get",
            success:function(res){
                jQuery(".category-name").val(res.allData.name);
                jQuery(".category-des").val(res.allData.des);
                jQuery(".category-status").val(res.allData.status);
                jQuery(".update-category").val(res.allData.id);
            }
        })
    });



    jQuery(document).on("click",".update-category",function(){
        var id = jQuery(this).val();
        var name = jQuery('.category-name').val();
        var des = jQuery('.category-des').val();
        var status = jQuery('.category-status').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url : "/updatecategory/"+id,
            type:"POST",
            data:{
                name:name,
                des:des,
                status:status
            },
            success:function(res){
                alert(res.msg);
                jQuery("#add").modal('hide');
                show();
            }
        })
    });

});
import"./sortable.esm-0d19b1d3.js";import{d as f}from"./mention-b4456db3.js";let r=-1e3,o=!1,n;const m=$("#add_attribute_target");$(document).ready(function(){if(b(),$("#add_attribute_target").length===0)return;p();let e=$("[data-max-fields]");e.length===1&&(o=e.data("max-fields"),n=$(".alert-too-many-fields"))});const p=()=>{h(),u(),$("#attributes-delete-all-confirm-submit").click(function(e){return e.preventDefault(),$(this).siblings('input[name="delete-all-attributes"]').val(1),$("#entity-attributes-all .attribute_delete").click(),$("#attributes-delete-all-confirm").modal("hide"),n&&n.hide(),$(this).closest("dialog")[0].close(),window.scrollTo({top:0,behavior:"smooth"}),!1}),$.each($('[data-toggle="private"]'),function(){$(this).hasClass("fa-lock")?$(this).prop("title",$(this).data("private")):$(this).prop("title",$(this).data("public"))}),$(document).on("shown.bs.modal",function(){u()})},u=()=>{$("[data-attribute-template]").unbind("click").click(function(e){if(e.preventDefault(),o!==!1)if($("form :input").length+4>o){n.show();return}else n.hide();r-=1;let t=$(this).data("attribute-template"),i=$(t).html().replace(/\$TMP_ID\$/g,r);return m.append(i),h(),f(),!1})},h=()=>{$.each($(".attribute_delete"),function(){$(this).unbind("click"),$(this).on("click",function(){$(this).parent().parent().remove(),n&&n.hide()})}),$('[data-toggle="private"]').unbind("click").click(function(){$(this).hasClass("fa-lock")?($(this).removeClass("fa-lock").addClass("fa-unlock-alt").prop("title",$(this).data("public")),$(this).prev("input:hidden").val("0"),window.showToast($(this).data("unlock"))):($(this).removeClass("fa-unlock-alt").addClass("fa-lock").prop("title",$(this).data("private")),$(this).prev("input:hidden").val("1"),window.showToast($(this).data("lock")))}),$('[data-toggle="star"]').unbind("click").click(function(){$(this).hasClass("fa-regular")?($(this).removeClass("fa-regular").addClass("fa-solid").prop("title",$(this).data("entry")),$(this).prev("input:hidden").val("1"),window.showToast($(this).data("pin"))):($(this).removeClass("fa-solid").addClass("fa-regular").prop("title",$(this).data("tab")),$(this).prev("input:hidden").val("0"),window.showToast($(this).data("unpin")))})};let c,s;const b=()=>{let e=$('[name="live-attribute-config"]');if(e.length===0)return;c=e.data("live"),s=$("#live-attribute-dialog");let t=1;$.each($(".live-edit"),function(){$(this).addClass("live-edit-parsed"),$(this).attr("data-uid",t),t++}),$(".live-edit-parsed").unbind("click").click(function(){let i=$(this).data("id"),a=c+"?id="+i+"&uid="+$(this).data("uid");$(document).on("shown.bs.modal",function(){v()}),window.openDialog("live-attribute-dialog",a)}),$(document).on("shown.bs.modal",function(){g()})},v=()=>{s.find("form").unbind("submit").submit(function(e){return e.preventDefault(),$.ajax({method:"POST",context:this,url:$(this).attr("action"),data:$(this).serialize()}).done(function(t){s.find("article").html(""),document.getElementById("live-attribute-dialog").close();let a=$('[data-uid="'+t.uid+'"]');a.attr("data-attribute",t.attribute),a.html(t.value),t.value?a.removeClass("empty-value"):a.addClass("empty-value"),window.showToast(t.success)}).fail(function(t){document.getElementById("live-attribute-dialog").close()}),!1})},g=()=>{const e=document.querySelectorAll("form.live-attribute-form"),t=document.getElementById("primary-dialog");e.forEach(function(i){i.onsubmit=a=>{a.preventDefault(),$.ajax({method:"POST",context:this,url:i.getAttribute("action"),data:$(i).serialize()}).done(function(l){t.getElementsByTagName("article")[0].innerHTML="",t.close();let d=document.querySelector('[data-live-id="'+l.id+'"]');d.dataset.dataAttribute=l.attribute,d.innerHTML=l.value,window.showToast(l.success)}).fail(function(l){l.responseJSON.message&&window.showToast(l.responseJSON.message,"error"),t.close()})}})};
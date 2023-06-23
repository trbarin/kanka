import{d as b}from"./delete-confirm-fec6aa52.js";let w,g,m,v,p,y,f,r,l,i,d,t;$(document).ready(function(){window.map.invalidateSize(),window.map.on("popupopen",function(e){b()}),$('a[href="#marker-pin"]').click(function(e){$('input[name="shape_id"]').val(1),$("#map-marker-bg-colour").show(),c()}),$('a[href="#marker-label"]').click(function(e){$('input[name="shape_id"]').val(2),$("#map-marker-bg-colour").hide(),c()}),$('a[href="#marker-circle"]').click(function(e){$('input[name="shape_id"]').val(3),$("#map-marker-bg-colour").show(),c()}),$('a[href="#marker-poly"]').click(function(e){$('input[name="shape_id"]').val(5),$("#map-marker-bg-colour").show(),c()}),$('a[href="#presets"]').click(function(e){B($(this).data("presets"))}),$('a[href="#form-markers"]').click(function(e){window.map.invalidateSize()}),D(),E(),T(),H(),j()});function D(){w=$("#map-body"),w.length!==0&&(g=$("#sidebar-map"),m=$("#sidebar-marker"),v=$("#map-marker-modal"),y=$("#map-marker-modal-title"),p=$("#map-marker-modal-content"),window.markerDetails=function(e){S(),window.kankaIsMobile.matches&&(e=e+"?mobile=1"),$.ajax({url:e,type:"GET",async:!0,success:function(n){n&&(window.kankaIsMobile.matches?(y.html(n.name),p.find(".content").html(n.body).show(),p.find(".spinner").hide()):(m.html(n.body).show().parent().find(".spinner").hide(),F(),w.addClass("sidebar-open")),b())}})},P())}function E(){$('select[name="size_id"]').change(function(n){this.value==6?($(".map-marker-circle-helper").hide(),$(".map-marker-circle-radius").show()):($(".map-marker-circle-radius").hide(),$(".map-marker-circle-helper").show())});let e=$("#map-marker-form");$("#entity-form").length===0&&$(".map-marker-edit-form").length===0||(e.unbind("submit").on("submit",function(){window.entityFormHasUnsavedChanges=!1}),P())}function S(){if(window.kankaIsMobile.matches){p.find(".spinner").show(),p.find(".content").hide(),v.modal("toggle");return}w.removeClass("sidebar-collapse").addClass("sidebar-open"),g.hide(),m.html("").show(),m.parent().find(".spinner").show(),x()}function F(){$(".marker-close").click(function(e){m.hide(),g.show()})}function P(){$(".map-legend-marker").click(function(e){e.preventDefault(),window.map.panTo(L.latLng($(this).data("lat"),$(this).data("lng"))),window[$(this).data("id")].openPopup()}),$("a.sidebar-toggle").click(function(){x()})}function x(){setTimeout(()=>{window.map.invalidateSize()},500)}function T(){$(".map-marker-entry-click").click(function(e){e.preventDefault(),$(this).parent().hide(),$(".map-marker-entry-entry").show()})}function j(){$(".btn-mode-enable").click(function(e){e.preventDefault(),window.exploreEditMode=!0,$("body").addClass("map-edit-mode")}),$(".btn-mode-disable").click(function(e){e.preventDefault(),window.exploreEditMode=!1,$("body").removeClass("map-edit-mode"),window.polygon&&window.map.removeLayer(window.polygon)}),$(".btn-mode-drawing").click(function(e){e.preventDefault(),M()})}function M(){window.drawingPolygon=!1,$("body").removeClass("map-drawing-mode"),$("#marker-modal").modal("show")}function H(){$("#start-drawing-polygon").on("click",function(e){e.preventDefault(),window.exploreEditMode=!1,window.startNewPolygon(),window.showToast($(this).data("toast")),$("body").addClass("map-drawing-mode"),$("#marker-modal").modal("hide")}),f=$("#reset-polygon"),f.click(function(e){e.preventDefault(),window.polygon&&window.map.removeLayer(window.polygon),$('textarea[name="custom_shape"]').val(""),f.hide(),window.startNewPolygon()}),window.map.on("editable:editing",function(e){C()&&(_(),e.layer.setStyle({weight:r,color:l,opacity:i,fillColor:d,fillOpacity:t}))})}window.startNewPolygon=function(){window.polygon=window.map.editTools.startPolygon();let e=!0;window.polygon.on("editable:dragend",window.markerUpdateHandler),window.polygon.on("editable:vertex:new",window.markerUpdateHandler),window.polygon.on("editable:vertex:dragend",window.markerUpdateHandler),window.polygon.on("editable:vertex:dragend",window.markerUpdateHandler),window.polygon.on("editable:drawing:end",function(n){e=!1}),window.polygon.on("click",function(n){e||M()})};window.setPolygonPosition=function(e){$('textarea[name="custom_shape"]').val(e)};window.markerUpdateHandler=function(e){C()?O(e):z()&&U(e)};const O=e=>{let n=e.target.getLatLngs();if(n.length===0)return;let a=[];n[0].forEach(o=>{a.push(o.lat.toFixed(3)+","+o.lng.toFixed(3))}),window.setPolygonPosition(a.join(" "))},U=e=>{let n=e.target._latlng;n&&($("#marker-latitude").val(n.lat.toFixed(3)),$("#marker-longitude").val(n.lng.toFixed(3)))},C=()=>{let e=document.getElementsByName("shape_id");return Number(e[0].value)===5},z=()=>{let e=document.getElementsByName("shape_id");return Number(e[0].value)===2};window.addPolygonPosition=function(e,n){let a=$('textarea[name="custom_shape"]'),o=a.val();o.length>0&&(o+=" "),a.val(o+e+","+n);let s=a.val().trim(" ").split(" "),h=[];s.forEach(N=>{let k=N.split(",");h.push([k[0],k[1]])},h),window.polygon&&window.map.removeLayer(window.polygon),_(),window.polygon=L.polygon(h,{weight:r,color:l,opacity:i,fillColor:d,fillOpacity:t,linecap:"round",linejoin:"round"}),window.polygon.addTo(window.map),f.show()};function _(){l=$('input[name="polygon_style[stroke]"]').val(),(!l||l.length<7)&&(l="red"),i=$('input[name="polygon_style[stroke-opacity]"]').val(),isNaN(i)||!i?i=1:i=i/100,d=$('input[name="colour"]').val(),(!d||d.length<7)&&(d="red"),t=$('input[name="opacity"]').val(),isNaN(t)?t=.5:t=t/100,r=$('input[name="polygon_style[stroke-width]"]').val(),(isNaN(r)||!r)&&(r=1)}function c(){$("#marker-main-fields").show(),$("#marker-footer").show()}function B(e){$("#marker-main-fields").hide(),$("#marker-footer").hide(),$(".marker-preset-list .fa-spinner").length!==0&&$.ajax({url:e}).done(function(n){$(".marker-preset-list").html(n),I()})}function I(){$(".preset-use").on("click",function(e){e.preventDefault();let n=$(this).data("url");$(this).find(".fa-spin").show(),$.ajax({url:n,context:this}).done(function(a){$(this).find(".fa-spin").hide(),Object.keys(a.preset).forEach(o=>{let u=a.preset[o],s=$('[name="'+o+'"]');s.length!==0&&(o.endsWith("colour")?s.spectrum("set",u):s.val(u))}),$('a[href="#marker-pin"]').click()})})}
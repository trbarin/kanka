document.querySelector(".alert-too-many-fields");let s,r;const c=()=>{if(l(),!document.getElementById("add_attribute_target"))return;const e=document.querySelector("[data-max-fields]");e&&e.dataset.maxFields},l=()=>{const e=document.querySelector('[name="live-attribute-config"]');if(!e)return;s=e.dataset.live,r=document.getElementById("live-attribute-dialog");let a=1;document.querySelectorAll(".live-edit").forEach(o=>{o.classList.add("live-edit-parsed"),o.dataset.uid=a,a++}),document.querySelectorAll(".live-edit-parsed").forEach(o=>{o.addEventListener("click",function(){const t=o.dataset.id,d=s+"?id="+t+"&uid="+o.dataset.uid;window.onEvent(function(){u()}),window.openDialog("live-attribute-dialog",d)})}),window.onEvent(function(){m()})},u=()=>{r.querySelector("form").onsubmit=function(e){e.preventDefault();const a=e.target,n=new FormData(a);return axios.post(a.getAttribute("action"),n).then(i=>{r.querySelector("article").innerHTML="",document.getElementById("live-attribute-dialog").close();const t=document.querySelector('[data-uid="'+i.data.uid+'"]');t.dataset.attribute=i.data.attribute,t.innerHTML=i.data.value,i.data.value?t.classList.remove("empty-value"):t.classList.add("empty-value"),window.showToast(i.data.success)}).catch(()=>{document.getElementById("live-attribute-dialog").close()}),!1}},m=()=>{const e=document.querySelectorAll("form.live-attribute-form"),a=document.getElementById("primary-dialog");e.forEach(function(n){n.onsubmit=i=>{i.preventDefault();const o=new FormData(n);axios.post(n.getAttribute("action"),o).then(t=>{a.querySelector("article").innerHTML="",a.close();const d=document.querySelector('[data-live-id="'+t.data.id+'"]');d.dataset.dataAttribute=t.data.attribute,d.innerHTML=t.data.value,window.showToast(t.data.success)}).catch(t=>{t.response.data.message&&window.showToast(t.response.data.message,"error"),a.close()})}})};c();
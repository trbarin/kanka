import{a as f}from"./axios-47b9d439.js";const p=document.querySelector("#gallery-loader"),s=document.querySelector("#gallery-images"),n=document.querySelector("#gallery-search"),u=document.querySelector("#bulk-delete"),y=document.querySelector("form#gallery-bulk"),l=document.getElementById("gallery-form"),c=document.querySelector(".progress"),S=document.querySelector(".gallery-error");let g,b;const v=()=>{const r=document.querySelector("#gallery-config");g=r.dataset.max,b=r.dataset.error,n.addEventListener("blur",function(e){e.preventDefault(),h()}),n.addEventListener("keydown",function(e){e.key==="Enter"&&(e.preventDefault(),h())}),q(),y.onsubmit=function(e){var a;e.preventDefault();const t=new FormData;(a=document.querySelectorAll('li[data-selected="1"]'))==null||a.forEach(d=>{t.append("file[]",d.dataset.id)});const o=document.querySelector('input[name="folder_id"]');return o&&t.append("folder_id",o.value),f.post(y.getAttribute("action"),t).then(d=>{var m;return(m=document.querySelectorAll('li[data-selected="1"]'))==null||m.forEach(E=>E.remove()),document.getElementById("bulk-destroy-dialog").close(),u.classList.add("btn-disabled"),window.showToast(d.data.toast),!1}),!1}},q=()=>{l&&(l.ondrop=r=>{if(r.preventDefault(),r.stopPropagation(),r.dataTransfer.items){let e=new FormData,t=0;if([...r.dataTransfer.items].forEach((a,d)=>{a.kind==="file"&&(e.append("file[]",a.getAsFile()),t++)}),t>g){w();return}let o=document.querySelector('input[name="folder_id"]');o&&e.append("folder_id",o.value),L(e),l.classList.remove("drop-shadow","dropping")}else[...r.dataTransfer.files].forEach((e,t)=>{})},l.ondragover=r=>{r.preventDefault(),l.classList.add("drop-shadow","dropping")},l.ondragleave=r=>{l.classList.remove("drop-shadow","dropping")})};function h(){s.classList.add("hidden"),p.classList.remove("hidden"),f.get(n.dataset.url+"?q="+n.value).then(r=>{p.classList.add("hidden"),s.innerHTML=r.data,s.classList.remove("hidden"),i()})}const A=()=>{l&&(l.onchange=r=>{r.preventDefault();let e=document.getElementById("file-upload");if(e.files.length>g){w();return}let t=new FormData;Array.from(e.files).forEach(a=>{t.append("file[]",a)});let o=document.querySelector('input[name="folder_id"]');o&&t.append("folder_id",o.value),L(t)})},w=()=>{window.showToast(b,"error")},L=r=>{let e={headers:{"Content-Type":"multipart/form-data"},onUploadProgress:function(t){let o=Math.round(t.loaded*100/t.total);document.querySelector('[role="progressbar"]').style.width=o+"%"}};c.classList.remove("hidden"),f.post(l.action,r,e).then(function(t){c.classList.add("hidden"),t.data.success&&(t.data.images.forEach(o=>{const a=document.querySelectorAll("li[data-folder]");if(a.length>1){const d=a[a.length-1];console.log("last folder",d,o),d.insertAdjacentHTML("afterend",o)}else s.prepend(o)}),D(t.data.storage),i())}).catch(function(t){if(c.classList.add("hidden"),t.response&&t.response.data.message){S.text(t.response.data.message).fadeToggle();let o=t.response.data.errors;Object.keys(o).forEach(d=>{window.showToast(o[d],"error")})}i()})},i=()=>{var r;(r=document.querySelectorAll("#gallery-images li"))==null||r.forEach(e=>{e.dataset.binded!=="1"&&(e.dataset.binded="1",e.addEventListener("click",function(t){if(t.shiftKey){if(!e.dataset.id)return;e.classList.toggle("border-2"),e.classList.toggle("border-blue-500"),e.getAttribute("data-selected")==="1"?e.setAttribute("data-selected",""):e.setAttribute("data-selected",1),T();return}let o=e.dataset.folder;if(o){window.location=o;return}window.openDialog("primary-dialog",e.dataset.url)}))})},T=()=>{document.querySelectorAll('li[data-selected="1"]').length===0?u.classList.add("btn-disabled"):u.classList.remove("btn-disabled")},D=r=>{let e=document.getElementById("storage-progress");e.style.width=r.percentage+"%",e.className=r.progress;let t=document.getElementById("storage-used");t.innerHTML=r.used};v();A();i();
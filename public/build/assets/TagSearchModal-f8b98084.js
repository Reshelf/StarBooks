import{i as f,z as h,A as _,s as g,o as n,b as i,e as s,j as d,k as y,l as m,w as c,m as w,B as x,F as k,r as b,t as S,C,q as u,T as $,p as M,h as T}from"./vendor-7cf07269.js";import{_ as B}from"./_plugin-vue_export-helper-c27b6911.js";const L=l=>(M("data-v-8ac44c63"),l=l(),T(),l),I={class:"window"},D={class:"header"},F=L(()=>s("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"#333"},[s("path",{d:"m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"})],-1)),V=[F],z={class:"title"},N={class:"p-8 h-[60vh] overflow-y-scroll scroll-none"},j=["placeholder"],q={class:"my-4"},A=["href"],E={__name:"TagSearchModal",setup(l){const o=f(!1),a=h({search:null,array:[]}),p=_(()=>a.search?a.array.filter(r=>a.search.toLowerCase().split(" ").every(e=>r.text.toLowerCase().includes(e))):a.array),v=async()=>{let r=await axios.get("/api/search-tags");a.array=r.data};return g(()=>{v()}),(r,e)=>(n(),i("div",{onClick:e[5]||(e[5]=u(t=>o.value=!1,["self"]))},[s("div",{class:"trigger",onClick:e[0]||(e[0]=t=>o.value=!0)},[d(r.$slots,"trigger",{},void 0,!0)]),y($,{name:"modal",appear:""},{default:m(()=>[c(s("div",{class:"overlay",onClick:e[4]||(e[4]=u(t=>o.value=!1,["self"]))},[s("div",I,[s("div",D,[s("button",{class:"close",onClick:e[1]||(e[1]=t=>o.value=!1)},V),s("div",z,[d(r.$slots,"trigger",{},void 0,!0)])]),s("div",N,[c(s("input",{"onUpdate:modelValue":e[2]||(e[2]=t=>a.search=t),type:"text",placeholder:r.t("検索"),class:"py-2 px-4 border w-full border-bbb rounded dark:bg-dark-1 dark:border-dark",onFocus:e[3]||(e[3]=t=>o.value=!0)},null,40,j),[[x,a.search]]),s("div",q,[(n(!0),i(k,null,b(C(p),t=>(n(),i("a",{key:t,href:`/tags/${t.text}`,class:"inline-flex m-1 items-center px-4 py-2 cursor-pointer bg-primary hover:bg-opacity-90 text-white rounded-full"},S(t.text),9,A))),128))])])])],512),[[w,o.value]])]),_:3})]))}},H=B(E,[["__scopeId","data-v-8ac44c63"]]);export{H as default};

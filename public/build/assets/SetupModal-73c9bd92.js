import{e as n,f as i,g as e,l,m as c,q as p,w as u,u as _,s as r,T as f,p as h,k as v}from"./vendor-57856d88.js";import{_ as m}from"./_plugin-vue_export-helper-c27b6911.js";const w={props:{user:{type:Object,default:{}}},data(){return{open:!0}},methods:{close(){this.open=!1,location.href="/"+this.user.username}}},k=o=>(h("data-v-4781ad0d"),o=o(),v(),o),S={class:"window"},g={class:"header"},x=k(()=>e("svg",{width:"24",height:"24",viewBox:"0 0 24 24",fill:"#333"},[e("path",{d:"m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"})],-1)),y=[x],C={class:"title"},B={class:"p-4 md:p-6 max-h-[60vh] md:max-h-[60vh] overflow-y-scroll overflow-x-hidden scroll-none"};function I(o,s,b,M,a,t){return n(),i("div",{onClick:s[3]||(s[3]=r((...d)=>t.close&&t.close(...d),["self"]))},[e("button",{onClick:s[0]||(s[0]=d=>a.open=!0)},[l(o.$slots,"trigger",{},void 0,!0)]),c(f,{name:"modal",appear:""},{default:p(()=>[u(e("div",{class:"overlay",onClick:s[2]||(s[2]=r((...d)=>t.close&&t.close(...d),["self"]))},[e("div",S,[e("div",g,[e("button",{class:"close",onClick:s[1]||(s[1]=(...d)=>t.close&&t.close(...d))},y),e("div",C,[l(o.$slots,"header",{},void 0,!0)])]),e("div",B,[l(o.$slots,"default",{},void 0,!0)])])],512),[[_,a.open]])]),_:3})])}const T=m(w,[["render",I],["__scopeId","data-v-4781ad0d"]]);export{T as default};

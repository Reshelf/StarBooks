import{r as i,e as n,f as r,g as a,l as u,m as d,q as m,w as c,u as v,s as f,T as p}from"./vendor-57856d88.js";const h={class:"window-avatar"},w=["src"],g={__name:"ThumbnailZoom",props:{thumbnail:{type:String,default:""}},setup(t){const s=i(!1);return(l,e)=>(n(),r("div",null,[a("div",{class:"cursor-pointer",onClick:e[0]||(e[0]=o=>s.value=!0)},[u(l.$slots,"thumbnail")]),d(p,{name:"modal",appear:""},{default:m(()=>[c(a("div",{class:"overlay",onClick:e[1]||(e[1]=f(o=>s.value=!1,["self"]))},[a("div",h,[a("img",{src:`${t.thumbnail}`,alt:"user image",loading:"lazy"},null,8,w)])],512),[[v,s.value]])]),_:1})]))}};export{g as default};

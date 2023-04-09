import{_ as l}from"./_plugin-vue_export-helper-c27b6911.js";import{e as o,f as n,n as d,g as a,t as k,p as r,k as p}from"./vendor-57856d88.js";const u={props:{initialIsLikedBy:{type:Boolean,default:!1},initialCountLikes:{type:Number,default:0},authorized:{type:Boolean,default:!1},endpoint:{type:String,default:""},big:{type:Boolean,default:!1}},data(){return{isLikedBy:this.initialIsLikedBy,countLikes:this.initialCountLikes,gotToLike:!1}},methods:{clickLike(){if(!this.authorized){alert("いいね機能はログイン中のみ使用できます");return}this.isLikedBy?this.unlike():this.like()},async like(){const e=await axios.put(this.endpoint);this.isLikedBy=!0,this.countLikes=e.data.countLikes,this.gotToLike=!0},async unlike(){const e=await axios.delete(this.endpoint);this.isLikedBy=!1,this.countLikes=e.data.countLikes,this.gotToLike=!1}}},h=e=>(r("data-v-7cf13dbc"),e=e(),p(),e),_=h(()=>a("path",{d:"M11.62 18.8101C11.28 18.9301 10.72 18.9301 10.38 18.8101C7.48 17.8201 1 13.6901 1 6.6901C1 3.6001 3.49 1.1001 6.56 1.1001C8.38 1.1001 9.99 1.9801 11 3.3401C12.01 1.9801 13.63 1.1001 15.44 1.1001C18.51 1.1001 21 3.6001 21 6.6901C21 13.6901 14.52 17.8201 11.62 18.8101Z","stroke-width":"1.5","stroke-linecap":"round","stroke-linejoin":"round"},null,-1)),f=[_],L={class:"ml-2"};function y(e,t,m,B,i,s){return o(),n("div",{class:"comment-like",onClick:t[0]||(t[0]=(...c)=>s.clickLike&&s.clickLike(...c))},[(o(),n("svg",{class:d([{clicked:i.isLikedBy},"stroke-red"]),height:"16px",viewBox:"0 0 22 20",fill:"none"},f,2)),a("span",L,k(i.countLikes),1)])}const x=l(u,[["render",y],["__scopeId","data-v-7cf13dbc"]]);export{x as default};

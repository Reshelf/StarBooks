import{s as i,e as o,t as a,n,o as l}from"./vendor-66ba3070.js";import{_ as r}from"./_plugin-vue_export-helper-c27b6911.js";const d={props:{initialIsLikedBy:{type:Boolean,default:!1},authorized:{type:Boolean,default:!1},endpoint:{type:String,default:""},big:{type:Boolean,default:!1}},data(){return{isLikedBy:this.initialIsLikedBy,gotToLike:!1}},computed:{buttonColor(){return this.isLikedBy?"btn-border":"btn-primary"},buttonText(){return this.isLikedBy?this.t("お気に入り作品"):this.t("お気に入りに追加する")}},methods:{clickLike(){if(!this.authorized){alert(this.t("いいね機能はログイン中のみ使用できます"));return}this.isLikedBy?this.unlike():this.like()},async like(){await i.put(this.endpoint),this.isLikedBy=!0,this.gotToLike=!0},async unlike(){await i.delete(this.endpoint),this.isLikedBy=!1,this.gotToLike=!1}}};function k(u,e,p,c,f,t){return l(),o("button",{class:n([t.buttonColor,"w-full py-2.5 px-4 md:px-6 text-[14px]"]),onClick:e[0]||(e[0]=(...s)=>t.clickLike&&t.clickLike(...s))},a(t.buttonText),3)}const L=r(d,[["render",k]]);export{L as default};

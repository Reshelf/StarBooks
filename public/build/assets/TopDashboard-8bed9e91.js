import{_ as n}from"./_plugin-vue_export-helper-c27b6911.js";import{e,f as s,t as o,y as r,o as c}from"./vendor-66ba3070.js";const l={props:{user:{type:Object,required:!0},books:{type:Array,required:!0}},data(){return{book:null}},mounted(){this.$nextTick(()=>{this.book=this.books[0]})}},_={class:"text-2xl mb-8"},d={class:"flex"},a={class:"px-8 py-6 border border-comiee"},h={class:"text-lg"},u={key:0,class:"mt-4"},m=["src"],p={class:"my-4"},b={class:"mb-4"},k={class:"mb-2 flex justify-between text-sm"},x=s("div",{class:""},"閲覧回数",-1),f={class:""},y=s("div",{class:"text-primary dark:text-f5 text-sm cursor-pointer"}," コンテンツアナリティクスへ移動 ",-1),v=s("section",null,null,-1);function g(i,j,w,B,t,q){return c(),e("div",null,[s("h2",_,o(i.t("アナリティクスダッシュボード")),1),s("section",d,[s("div",a,[s("h3",h,o(i.t("最新の作品のパフォーマンス")),1),t.book?(c(),e("div",u,[t.book.thumbnail?(c(),e("img",{key:0,class:"w-[250px] h-[180px] object-cover",src:t.book.thumbnail,alt:""},null,8,m)):r("",!0),s("div",p,[s("h4",b,o(t.book.title),1),s("div",k,[x,s("div",f,o(t.book.views),1)])]),y])):r("",!0)])]),v])}const T=n(l,[["render",g]]);export{T as default};

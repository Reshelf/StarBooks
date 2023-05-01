import{_ as f}from"./_plugin-vue_export-helper-c27b6911.js";import{e as a,f as r,F as y,x as g,t as p,y as u,o as d,p as m,q as x}from"./vendor-66ba3070.js";const _={props:{data:{type:Array,required:!0},type:{type:String,required:!0}},data(){return{width:600,height:300,paddingLeft:40,paddingRight:20,paddingTop:20,paddingBottom:40,tooltipVisible:!1,tooltipData:{},tooltipPosition:{x:0,y:0},borderVisible:[]}},computed:{points(){const e=(this.height-this.paddingTop-this.paddingBottom)/(this.yMax*1.5);let i;this.type==="daily"?i=this.data.length:this.type==="weekly"?i=Math.min(this.data.length,7):this.type==="monthly"?i=Math.min(this.data.length,30):this.type==="yearly"?i=Math.min(this.data.length,12):i=7;const o=this.data.slice(-i),h=(this.width-this.paddingLeft-this.paddingRight)/(o.length-1);return o.map((t,s)=>({x:this.paddingLeft+s*h,y:this.height-this.paddingBottom-t.y*e,date:t.date}))},linePath(){if(this.points.length<2)return"";let e=`M${this.points[0].x},${this.points[0].y}`;for(let i=1;i<this.points.length;i++){const o=this.points[i-1],h=this.points[i],t=(h.x+o.x)/2;e+=`C${t},${o.y},${t},${h.y},${h.x},${h.y}`}return e},shadowPath(){let e=this.linePath;const i=this.points[this.points.length-1];e+=` L${i.x},${this.height-this.paddingBottom}`;const o=this.points[0];return e+=` L${o.x},${this.height-this.paddingBottom} Z`,e},yMax(){const e=Math.max(...this.data.map(i=>i.y))||1;return e>2?e:2},yScale(){return(this.height-this.paddingTop-this.paddingBottom)/(this.yMax*1.5)},interval(){return this.yMax/2},intervalYScale(){return this.yScale*this.interval}},mounted(){this.$nextTick(()=>{this.width=this.$refs.graph.clientWidth,this.borderVisible=Array(this.points.length).fill(!1)})},methods:{formatDate(e){const i=new Date(e),o=i.getMonth()+1,h=i.getDate();if(this.type==="daily")return`${o}-${h}`;if(this.type==="weekly")return`${o}/${h}`;if(this.type==="monthly"){const t=new Date(i.getFullYear(),i.getMonth(),1),s=Math.ceil((i-t)/(1e3*60*60*24));return`${o}/${s}`}else return this.type==="yearly"?`${i.getFullYear()}/${o}`:`${o}-${h}`},formatNumber(e){return e>=1e12?(e/1e12).toFixed(1)+"t":e>=1e9?(e/1e9).toFixed(1)+"b":e>=1e6?(e/1e6).toFixed(1)+"m":e>=1e3?(e/1e3).toFixed(1)+"k":e},showTooltip(e){this.tooltipVisible=!0,this.tooltipData={date:this.formatTooltipDate(this.data[e].date),pageViews:this.data[e].y};const i=200,o=100,h=i/2,t=o-20,s=Math.min(Math.max(this.points[e].x-h,this.paddingLeft),this.width-this.paddingRight-i),n=this.points[e].y-t;this.tooltipPosition={x:s,y:n}},formatTooltipDate(e){const i=new Date(e),o=i.getFullYear(),h=i.getMonth()+1,t=i.getDate(),s=["日","月","火","水","木","金","土"][i.getDay()];return this.type==="yearly"?`${o}年${h}月`:`${o}年${h}月${t}日(${s})`},hideTooltip(){this.tooltipVisible=!1},showBorder(e){this.borderVisible[e]=!0},hideBorder(){this.borderVisible=this.borderVisible.map(()=>!1)},handleMouseleave(){this.hideBorder(),this.hideTooltip()},handleLineMouseover(e){const i=e.clientX-this.$refs.graph.getBoundingClientRect().left;let o=0,h=Number.MAX_VALUE;this.points.forEach((s,n)=>{const l=Math.abs(s.x-i);l<h&&(h=l,o=n)});const t=this.points[1].x-this.points[0].x;h<t*.5?(this.borderVisible=this.borderVisible.map(()=>!1),this.showBorder(o),this.showTooltip(o)):(this.hideBorder(),this.hideTooltip())}}},c=e=>(m("data-v-a5c4a324"),e=e(),x(),e),b={ref:"graph",class:"w-full pt-8 flex justify-center items-center"},w=["height"],M=["x1","y1","x2","y2"],k=["x","y"],B=["x1","y1","x2","y2"],D=c(()=>r("defs",null,[r("linearGradient",{id:"lineShadow",x1:"0",y1:"0",x2:"0",y2:"1"},[r("stop",{offset:"0%","stop-color":"#0076f0","stop-opacity":"0.3"}),r("stop",{offset:"100%","stop-color":"#0076f0","stop-opacity":"0"})])],-1)),V=["d"],v=c(()=>r("animate",{attributeName:"opacity",from:"0",to:"1",dur:".5s",fill:"freeze"},null,-1)),S=[v],P=["d"],L=c(()=>r("animate",{attributeName:"stroke-dasharray",from:"0, 1000",to:"1000, 0",dur:".5s",fill:"freeze"},null,-1)),T=[L],F=["x1","y1","x2","y2","stroke-opacity"],N=["cx","cy","opacity"],Y=["x","y"],R=["x","y"],X={class:"bg-white dark:bg-dark-1 rounded border border-comiee p-2 shadow-md"},z={class:"text-[11px] whitespace-nowrap"},A={class:"text-2xl"};function C(e,i,o,h,t,s){return d(),a("div",b,[(d(),a("svg",{class:"graph-svg w-full",height:t.height,preserveAspectRatio:"none",onMousemove:i[0]||(i[0]=(...n)=>s.handleLineMouseover&&s.handleLineMouseover(...n)),onMouseleave:i[1]||(i[1]=(...n)=>s.handleMouseleave&&s.handleMouseleave(...n))},[r("line",{x1:t.paddingLeft,y1:t.height-t.paddingBottom,x2:t.width-t.paddingRight,y2:t.height-t.paddingBottom,stroke:"#dadce0","stroke-width":"2"},null,8,M),(d(),a(y,null,g(3,n=>r("g",{key:n},[r("text",{x:t.paddingLeft-10,y:t.height-t.paddingBottom-n*s.intervalYScale,"text-anchor":"end","font-size":"12"},p(s.formatNumber(n*s.interval)),9,k),r("line",{x1:t.paddingLeft,y1:t.height-t.paddingBottom-n*s.intervalYScale,x2:t.width-t.paddingRight,y2:t.height-t.paddingBottom-n*s.intervalYScale,style:{stroke:"rgb(218, 220, 224)"}},null,8,B)])),64)),D,r("path",{d:s.shadowPath,fill:"url(#lineShadow)"},S,8,V),r("g",null,[r("path",{d:s.linePath,fill:"none",stroke:"#0076f0","stroke-width":"4"},T,8,P)]),(d(!0),a(y,null,g(s.points,(n,l)=>(d(),a("g",{key:l},[r("line",{x1:n.x,y1:t.height-t.paddingBottom,x2:n.x,y2:t.height-t.paddingBottom-s.intervalYScale*3,"stroke-opacity":t.borderVisible[l]?1:0,stroke:"#bbb","stroke-width":"1","stroke-dasharray":"2,2"},null,8,F),r("circle",{cx:n.x,cy:n.y,r:"4",class:"rounded-full fill-primary z-50",opacity:t.borderVisible[l]?1:0},null,8,N),r("text",{x:n.x,y:t.height-t.paddingBottom+20,"text-anchor":"middle","font-size":"12"},p(s.formatDate(n.date)),9,Y)]))),128)),t.tooltipVisible?(d(),a("foreignObject",{key:0,x:t.tooltipPosition.x,y:t.tooltipPosition.y,width:"200",height:"100"},[r("div",X,[r("p",z,p(t.tooltipData.date)+p(e.t("のページビュー")),1),r("p",A,p(s.formatNumber(t.tooltipData.pageViews)),1)])],8,R)):u("",!0)],40,w))],512)}const q=f(_,[["render",C],["__scopeId","data-v-a5c4a324"]]);export{q as default};

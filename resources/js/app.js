import { createApp } from "vue/dist/vue.esm-bundler";
import "./common/bootstrap";
import GlobalMethods from "./common/globalMethods";
import "./common/theme";

import components from "./common/components";
import i18n from "./common/i18n";

const app = createApp({
    components,
});

app.use(i18n);
GlobalMethods.install(app);
app.mount("#app");

// Vueアプリケーションがマウントされた後に、<div id="app">を表示する
document.getElementById("app").style.display = "block";

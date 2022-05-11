import AppListing from "../app-components/Listing/AppListing";
import VueIconPicker from "vue-icon-picker";
import { ColorPicker, ColorPanel } from "one-colorpicker";

Vue.component("task-listing", {
    mixins: [AppListing],
});

Vue.use(ColorPanel);
Vue.use(ColorPicker);

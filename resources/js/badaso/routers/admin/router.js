import Index from "../../pages/custom-dashboard/index.vue";

const prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/index",
    name: "Index",
    component: Index,
    meta: {
      title: "Home",
    },
  },
];

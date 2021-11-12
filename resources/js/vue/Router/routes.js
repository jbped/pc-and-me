const routes = [
    {
        path: "",
        component: () => import("../Pages/home.vue"),
        name: "home",
    },
    {
        path: "new-build",
        component: () => import("../Pages/newBuild.vue"),
        name: "new-build",
    },
];

export default routes;

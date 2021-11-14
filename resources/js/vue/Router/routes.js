const routes = [
    {
        path: "/",
        component: () => import("../Pages/home.vue"),
        name: "HomePage",
    },
    {
        path: "/builds",
        component: () => import("../Pages/buildList.vue"),
        name: "BuildList",
    },
    {
        path: "/parts",
        component: () => import("../Pages/partsList.vue"),
        name: "PartsList",
    },
    {
        path: "/new-build",
        component: () => import("../Pages/newBuild.vue"),
        name: "NewBuild",
    },
    {
        path: "/build/:id",
        component: () => import("../Pages/viewBuild.vue"),
        name: "ViewBuild",
    },
];

export default routes;

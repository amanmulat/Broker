const modaltarget = document.getElementById("extralarge-modal");
const contactModal = document.getElementById("contact-modal");
const modalOption = {
    backdropClasses:
        "bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40",
};
const modalOptionTwo = {
    backdropClasses:
        "bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-41",
    onHide: () => {
        console.log("noekfdjas");
    },
};
const modal = new Modal(modaltarget, modalOption);
const contact_modal = new Modal(contactModal, modalOptionTwo);
// modal.show();
const tabElements = [
    {
        id: "profile",
        triggerEl: document.querySelector("#profile-tab-example"),
        targetEl: document.querySelector("#profile-example"),
    },
    {
        id: "dashboard",
        triggerEl: document.querySelector("#dashboard-tab-example"),
        targetEl: document.querySelector("#dashboard-example"),
    },
    {
        id: "contacts",
        triggerEl: document.querySelector("#contacts-tab-example"),
        targetEl: document.querySelector("#contacts-example"),
    },
];

// options with default values
const options = {
    defaultTabId: "profile",
    activeClasses:
        "text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500",
    inactiveClasses:
        "text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300",
};
const tabs = new Tabs(tabElements, options);

// console.log(targetEl);
// modal.show();

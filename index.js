var registerBlockType = wp.blocks.registerBlockType;

registerBlockType("rc/donation", {
    edit: function () {
        return "Edit";
    },
    save: function () {
        return "Save";
    },
});
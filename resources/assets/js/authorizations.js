let user = window.App.user;

module.exports = {

    owns(model, prop = 'user') {
        return model[prop] === user.id;
    }
};

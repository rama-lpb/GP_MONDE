"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.Client = void 0;
var Personne_1 = require("./Personne");
var Client = /** @class */ (function (_super) {
    __extends(Client, _super);
    function Client(id, nom, prenom, tel, adresse, email, destinataire) {
        var _this = _super.call(this, id, nom, prenom, tel, adresse, email) || this;
        _this.colis = [];
        _this.destinataire = destinataire;
        return _this;
    }
    return Client;
}(Personne_1.Personne));
exports.Client = Client;

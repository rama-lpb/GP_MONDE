"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.BaseRepository = void 0;
var fs = require("fs");
var path = require("path");
var BaseRepository = /** @class */ (function () {
    function BaseRepository() {
    }
    Object.defineProperty(BaseRepository.prototype, "filePath", {
        get: function () {
            return path.resolve(process.cwd(), "data", this.fileName);
        },
        enumerable: false,
        configurable: true
    });
    BaseRepository.prototype.findAll = function () {
        if (!fs.existsSync(this.filePath))
            return [];
        var raw = fs.readFileSync(this.filePath, "utf-8");
        return JSON.parse(raw);
    };
    BaseRepository.prototype.saveAll = function (items) {
        fs.writeFileSync(this.filePath, JSON.stringify(items, null, 2), "utf-8");
    };
    BaseRepository.prototype.add = function (item) {
        var all = this.findAll();
        all.push(item);
        this.saveAll(all);
    };
    BaseRepository.prototype.findById = function (id) {
        return this.findAll().find(function (i) { return i.id === id; });
    };
    BaseRepository.prototype.deleteById = function (id) {
        var all = this.findAll().filter(function (i) { return i.id !== id; });
        this.saveAll(all);
    };
    BaseRepository.prototype.update = function (item) {
        var all = this.findAll().map(function (i) { return i.id === item.id ? item : i; });
        this.saveAll(all);
    };
    return BaseRepository;
}());
exports.BaseRepository = BaseRepository;

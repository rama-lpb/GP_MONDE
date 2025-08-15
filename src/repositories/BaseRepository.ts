import * as fs from "fs";
import * as path from "path";

export abstract class BaseRepository<T extends { id: number }> {
    protected abstract fileName: string;

    protected get filePath(): string {
        return path.resolve(process.cwd(), "data", this.fileName);
    }

    findAll(): T[] {
        if (!fs.existsSync(this.filePath)) return [];
        const raw = fs.readFileSync(this.filePath, "utf-8");
        return JSON.parse(raw) as T[];
    }

    saveAll(items: T[]): void {
        fs.writeFileSync(this.filePath, JSON.stringify(items, null, 2), "utf-8");
    }

    add(item: T): void {
        const all = this.findAll();
        all.push(item);
        this.saveAll(all);
    }

    findById(id: number): T | undefined {
        return this.findAll().find(i => i.id === id);
    }

    deleteById(id: number): void {
        const all = this.findAll().filter(i => i.id !== id);
        this.saveAll(all);
    }

    update(item: T): void {
        const all = this.findAll().map(i => i.id === item.id ? item : i);
        this.saveAll(all);
    }
}
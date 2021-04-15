import {Task} from "../models/Task";

export class TaskFactory {
    static fromJsonArray(data) {
        const tasks: Task[] = [];

        data.forEach(t => {
            let task = new Task();
            task.id = t.id;
            task.title = t.title;
            task.description = t.description;
            task.isCompleted = t.isCompleted;
            task.createdAt = t.createdAt;
            task.updatedAt = t.updatedAt;

            tasks.push(task);
        });

        return tasks;
    }
}
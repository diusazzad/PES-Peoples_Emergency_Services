<form action="/admin/announcements" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" required>

    <label for="content">Content</label>
    <textarea name="content" required></textarea>

    <button type="submit">Post Announcement</button>
</form>

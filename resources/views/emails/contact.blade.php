<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; border: 1px solid #ddd; padding: 20px; background-color: #f9f9f9;">
    <h5 style="color: #333; font-size: 24px; margin-bottom: 20px; text-align: center; font-weight: bold; border-bottom: 2px solid #f0ad4e; padding-bottom: 10px;">
        New Contact Form Submission
    </h5>

    <p style="font-size: 16px; color: #555;">
        <strong style="color: #333;">Name:</strong>
        <span style="color: #555;">{{ $data['name'] }}</span>
    </p>

    <p style="font-size: 16px; color: #555;">
        <strong style="color: #333;">Email:</strong>
        <span style="color: #555;">{{ $data['email'] }}</span>
    </p>

    <p style="font-size: 16px; color: #555;">
        <strong style="color: #333;">Subject:</strong>
        <span style="color: #555;">{{ $data['subject'] }}</span>
    </p>

    <p style="font-size: 16px; color: #555;">
        <strong style="color: #333;">Message:</strong>
    </p>
    <p style="font-size: 16px; line-height: 1.5; color: #555; background-color: #fff; padding: 15px; border-left: 4px solid #f0ad4e;">
        {{ $data['message'] }}
    </p>

    <p style="font-size: 14px; color: #888; margin-top: 30px; text-align: center;">
        <em>This email was generated from the contact form on your website.</em>
    </p>
</div>
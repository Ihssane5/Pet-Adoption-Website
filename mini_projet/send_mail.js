function envoyerMessage(type) {
    var emoji = emojione.toShort("🥳🥳"); 
    const email = document.getElementById("email").value;
    const name = document.getElementById("name").value;
    if(type) {
        message =`Dear ${name},
        We are thrilled to extend our warmest congratulations ${emoji}on your recent acceptance 
        as a member of the Helpa Pet Adoption Association.
        Your dedication and passion have certainly paid off, and it’s inspiring to see you recognized
        by such a prestigious association.
        This is not just a significant milestone in your journey, but also a testament to your hard work 
        and commitment to excellence. 
        Warm regards,
        
        Helpa`
        const corpsMessage = encodeURIComponent(message);
        if(email) {
            window.location.href = `mailto:${email}?subject=Accepted%20As%20a%20Member&body=${corpsMessage}`;
        }
    }
    else {
        message=`Dear ${name},

        We hope this message finds you well.We are writing to you regarding your recent application for membership with Helpa Pet Adoption Association. 
        We appreciate the time and effort you invested in your application and your interest in joining our community.
        
        After careful consideration and a thorough review process, we regret to inform you that we are unable to offer you membership at this time.
        Please consider this not as a rejection but as an encouragement to further reapply in the future.
        Warm regards,
        
        Helpa`
        const corpsMessage = encodeURIComponent(message);
        if(email) {
            window.location.href = `mailto:${email}?subject=Membership%20Application%20Update&body=${corpsMessage}`;
    }
}
    }
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css') ?>">
<!-- Begin Page Content -->
    <div class="container-fluid">
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h4 class="m-0 font-weight-bold text-primary">Chat Admin</h4> 
                <?php echo $this->session->flashdata('notif') ?>
            </div>
                <div class="card-body">
                    <p>Silahkan Pilih Admin</p>
                    <table style="width: 100%" id="table-friend">
                        <?php foreach ($admin as $item) { ?>
                        <tr>
                            <td><a href="javascript:;" data-friend="<?= $item->id_user ?>"><?= $item->nama_kar ?></a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>

        </div>
    <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->

<br>


<!-- Begin Page Content -->
    <div class="container-fluid">
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" >
                <h4 class="m-0 font-weight-bold text-primary">Chat Programmer</h4> 
                <?php echo $this->session->flashdata('notif') ?>
            </div>
                <div class="card-body">
                    <p>Silahkan Pilih Programmer</p>
                    <table style="width: 100%" id="table-friend">
                        <?php foreach ($programmer as $item) { ?>
                        <tr>
                            <td><a href="javascript:;" data-friend="<?= $item->id_user ?>"><?= $item->nama_kar?></a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>

        </div>
    <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->

        
<!-- TEMPLATE -->
<div id="wgt-container-template" style="display: none">
    <div class="msg-wgt-container">
        <div class="msg-wgt-header">
            <a href="javascript:;" class="online"></a>
            <a href="javascript:;" class="nama_kar"></a>
            <a href="javascript:;" class="close">x</a>
        </div>
        <div class="msg-wgt-message-container">
            <table width="100%" class="msg-wgt-message-list">
            </table>
        </div>
        <div class="msg-wgt-message-form">
            <textarea name="message" placeholder="Type your Message Here"></textarea>
        </div>
    </div>
</div>

<script type="text/x-template" id="msg-template" style="display: none">
    <tbody>
        <tr class="msg-wgt-message-list-header">
                  <td rowspan="2" class ="avatar"><img src="<?= base_url('assets/avatar.png') ?>"></td>
            <td class="nama_kar"></td>
            <td class="time"></td>
        </tr>
        <tr class="msg-wgt-message-list-body">
            <td colspan="2"></td>
        </tr>
        <tr class="msg-wgt-message-list-separator"><td colspan="3"></td></tr>
    </tbody>
</script>

<script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    var chatPosition = [
        false, // 1
        false, // 2
        false, // 3
        false, // 4
        false, // 5
        false, // 6
        false, // 7
        false, // 8
        false, // 9
        false // 10
    ];

    // New chat
    $(document).on('click', 'a[data-friend]', function(e) {
        var $data = $(this).data();
        if ($data.friend !== undefined && chatPosition.indexOf($data.friend) < 0) {
            var posRight = 0;
            var position;
            for(var i in chatPosition) {
                if (chatPosition[i] == false) {
                    posRight = (i * 270) + 20;
                    chatPosition[i] = $data.friend;
                    position = i;
                    break;
                }
            }
            var tpl = $('#wgt-container-template').html();
            var tplBody = $('<div/>').append(tpl);
            tplBody.find('.msg-wgt-container').addClass('msg-wgt-active');
            tplBody.find('.msg-wgt-container').css('right', posRight + 'px');
            tplBody.find('.msg-wgt-container').attr('data-chat-position', position);
            tplBody.find('.msg-wgt-container').attr('data-chat-with', $data.friend);
            $('body').append(tplBody.html());
            initializeChat();
        }
    });

    // Minimize Maximize
    $(document).on('click', '.msg-wgt-header > a.nama_kar', function() {
        var parent = $(this).parent().parent();
        if (parent.hasClass('minimize')) {
            parent.removeClass('minimize')
        } else {
            parent.addClass('minimize');
        }
    });

    // Close
    $(document).on('click', '.msg-wgt-header > a.close', function() {
        var parent = $(this).parent().parent();
        var $data = parent.data();
        parent.remove();
        chatPosition[$data.chatPosition] = false;
        setTimeout(function() {
            initializeChat();
        }, 1000)
    });

    var chatInterval = [];
 
    var initializeChat = function() {
        $.each(chatInterval, function(index, val) {
            clearInterval(chatInterval[index]);   
        });
 
        $('.msg-wgt-active').each(function(index, el) {
            var $data = $(this).data();
            var $that = $(this);
            var $container = $that.find('.msg-wgt-message-container');
 
            chatInterval.push(setInterval(function() {
 
                var oldscrollHeight = $container[0].scrollHeight;
                var oldLength = 0;
                $.post('<?= site_url('marketing/chat/getChats') ?>', {chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    $that.find('a.nama_kar').text(data.nama_kar);
                    // from last
                    var chatLength = data.chats.length;
                    var newIndex = data.chats.length;
                    $.each(data.chats, function(index, el) {
                        newIndex--;
                        var val = data.chats[newIndex];
 
                        var tpl = $('#msg-template').html();
                        var tplBody = $('<div/>').append(tpl);
                        var id = (val.chat_id +'_'+ val.send_by +'_'+ val.send_to).toString();
                        
 
                        if ($that.find('#'+ id).length == 0) {
                            tplBody.find('tbody').attr('id', id); // set class
                            tplBody.find('td.nama_kar').text(val.nama_kar); // set name
                            tplBody.find('td.time').text(val.time); // set time
                            tplBody.find('td.avatar').html('<img src="<?= base_url('upload/user') ?>/'+val.image+'">'); // set time
                            tplBody.find('.msg-wgt-message-list-body > td').html(nl2br(val.message)); // set message
                            $that.find('.msg-wgt-message-list').append(tplBody.html()); // append message
 
                            //Auto-scroll
                            var newscrollHeight = $container[0].scrollHeight - 20; //Scroll height after the request
                            if (newIndex === 0) {
                                $container.animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }
                        }
                    });
                });
            }, 1000));
 
            $that.find('textarea').on('keydown', function(e) {
                var $textArea = $(this);
                if (e.keyCode === 13 && e.shiftKey === false) {
                    $.post('<?= site_url('marketing/chat/sendMessage') ?>', {message: $textArea.val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    });
                    $textArea.val(''); // clear input
 
                    e.preventDefault(); // stop 
                    return false;
                }
            });
        });
    }
    var nl2br = function(str, is_xhtml) {
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>'; // Adjust comment to avoid issue on phpjs.org display
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }
 
 
    // on load
    initializeChat();
});
</script>




